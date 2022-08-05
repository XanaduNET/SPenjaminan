<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sekretaris extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_sekretaris');
    }
    public function suratmasuk()
    {
        $data['title'] = 'Surat Masuk CS';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['sm'] = $this->Model_sekretaris->getSM();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/suratmasukvw', $data);
        $this->load->view('template/footer');
    }
    public function inputsuratmasuk()
    {   
         $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $SMasal = $_POST['SMasal'];
        $SMnomor = $_POST['SMnomor'];
        $SMtanggalsurat = $_POST['SMtanggalsurat'];
        $SMtanggalterima = $_POST['SMtanggalterima'];
        $SMperihal = $_POST['SMperihal'];

        $this->Model_sekretaris->uploadsuratmasuk($SMasal, $SMnomor, $SMtanggalsurat, $SMtanggalterima, $SMperihal);
        
        $data = array(
            'comment_subject' => 'Surat Masuk Baru',
            'comment_text' => "$SMasal / $SMnomor / $SMperihal",
            'comment_status' => 0,
            'roleId_sender' => $data['user']['role_id'],
            'roleId_receiver' => 14,
        );
        $this->db->insert('tbl_comments', $data);

        redirect('Sekretaris/suratmasuk');
    }
    public function accsuratmasuk()
    {
        $data['title'] = 'List Surat Masuk CS';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['sm'] = $this->Model_sekretaris->getSMMasuk();
        $data['smreq'] = $this->Model_sekretaris->getSMAcc();
        $data['smuntuk'] = $this->Model_sekretaris->getSMUntuk();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/accsuratmasuk', $data);
        $this->load->view('template/footer');
    }

    public function akseptasisuratmasuk()
    {   
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $SMid = $_POST['SMid'];
        $SMuntuk = $_POST['ROLEid'];

        $this->Model_sekretaris->updatesuratmasuk($SMid, $SMuntuk);

        
        $data = array(
            'comment_subject' => 'Terusan Surat Masuk',
            'comment_text' => "Mohon Diperiksa",
            'comment_status' => 0,
            'roleId_sender' => $data['user']['role_id'],
            'roleId_receiver' => 15,
        );
        $this->db->insert('tbl_comments', $data);


        redirect('Sekretaris/accsuratmasuk');
    }

    public function accsuratmasuksekdir()
    {
        $data['title'] = 'Permohonan Surat Masuk Sekdir';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['sm'] = $this->Model_sekretaris->getSMMasukSekdir();
        $data['smreq'] = $this->Model_sekretaris->getSMAccSekdir();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/accsuratmasuksekdir', $data);
        $this->load->view('template/footer');
    }
    public function akseptasisuratmasukdir()
    {   
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $SMid = $_POST['SMid'];

        //
        $query = $this->db->query("SELECT SMuntuk FROM tblsm WHERE SMid ='$SMid'")->row_array();
        //
        $SMuntuk = $query['SMuntuk'];
        
        if ($SMuntuk == "Direktur Utama"){
            $roleId_receiver = 4;
        }
        else if ($SMuntuk == "Direktur Umum")
        {
            $roleId_receiver = 20;
        }
        $this->Model_sekretaris->updatesuratmasuksekdir($SMid, $SMuntuk);

        $data = array(
            'comment_subject' => 'Terusan Surat Masuk',
            'comment_text' => "Mohon Diperiksa",
            'comment_status' => 0,
            'roleId_sender' => $data['user']['role_id'],
            'roleId_receiver' => $roleId_receiver,
        );
        $this->db->insert('tbl_comments', $data);

        redirect('Sekretaris/accsuratmasuksekdir');
    }
    public function monitoringsuratmasuk()
    {
        $data['title'] = 'Permohonan Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['small'] = $this->Model_sekretaris->getSMAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('Sekretaris/monitoringsuratmasuk', $data);
        $this->load->view('template/footer');
    }

    public function uploaddokumen()
    {
        
            $this->load->model('Model_sekretaris');
            $SMid = $this->uri->segment(3);

            $config = array(
                'upload_path' => "./uploads/",
                'allowed_types' => "pdf",
                'overwrite' => true,
                'max_size' => "2048000", // Tertulis dalam KB maks 2mb
            );
            $this->load->library('upload', $config);
            if ($this->upload->do_upload()) {
                $data = array('upload_data' => $this->upload->data());
                $UPLDnama = $this->upload->data('file_name');
                $date = date("d-m-Y");
                $bulan = date("m");
                $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

                $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                    "Attempt: " . ("Success Upload Berkas") . PHP_EOL .
                    "User: " . $namauser['nama'] . PHP_EOL .
                    "Aksi: " . ('Surat Masuk') . PHP_EOL .
                    "-------------------------" . PHP_EOL;
                //-
                file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

                $this->Model_sekretaris->upload($UPLDnama, $SMid);
                //data berhasil di upload
            } else {
                echo "<script>
                    alert('Berkas Tidak Berhasil Di Upload');
                    window.location.href='../../sekretaris/suratmasuk';
                    </script>";
                //data tidak berhasil di upluad
            }
        
    }

    public function suratmasuknotify()
    {
        $data['title'] = 'Surat Masuk Sekretaris';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $role = $data['user']['role_id'];
        $data['sm'] = $this->Model_sekretaris->getSuratMasuk($role);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('sekretaris/suratmasuknotify', $data);
        $this->load->view('template/footer');

    }
    public function approvalskdiv()
    {
        $data['title'] = 'Permohonan Surat Keluar Divisi';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['skall'] = $this->Model_sekretaris->getSKAll();
        $data['skreq'] = $this->Model_sekretaris-> getSKAcc();
        $data['skuntuk'] = $this->Model_sekretaris->getSMUntuk();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('Sekretaris/approvalsuratkeluardiv', $data);
        $this->load->view('template/footer');
    }

    public function akseptasisuratkeluar()
    {   
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $SKid = $_POST['SKid'];
        $SKuntuk = $_POST['ROLEid'];

      
        $this->Model_sekretaris->updatesuratkeluar($SKid, $SKuntuk);

        
        $data = array(
            'comment_subject' => 'Terusan Surat Keluar',
            'comment_text' => "Mohon Diperiksa",
            'comment_status' => 0,
            'roleId_sender' => $data['user']['role_id'],
            'roleId_receiver' => 15,
        );
        $this->db->insert('tbl_comments', $data);

        redirect('Sekretaris/approvalskdiv');
    }


    public function suratkeluardiv()
    {
        $data['title'] = 'Permohonan Surat Keluar Divisi';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['sk'] = $this->Model_sekretaris->getSKDiv();
    

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('Sekretaris/suratkeluardiv', $data);
        $this->load->view('template/footer');
    }


    public function nomorsk()
    {   
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $SKid = $this->uri->segment(3);
       
        $this->Model_sekretaris->nomorsk($SKid);
        redirect('Sekretaris/suratkeluardiv');
    }


}
