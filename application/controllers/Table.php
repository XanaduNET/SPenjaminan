<?php

class Table extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Model_table_semua');
        $this->load->model('Model_nasabah');
        $this->load->model('Model_tablesemua');
        $this->load->model('Model_Kredit');
        $this->load->model('Model_table');
        
    }

    public function index()
    {
        $keyword = $this->input->post('keyword');
        $data['ambilid'] = $this->Model_tablesemua->ambilid();
        //     $data['autogen'] = $this->Model_Kredit->noregis();
        $data['table'] = $this->Model_table_semua->ambil_data($keyword);

        $data['title'] = 'Data Penjaminan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/table', $data);
        $this->load->view('template/footer');

    }

    public function sertifikat()
    {

        $id = $this->uri->segment(3);
        $this->db->set('status', 1);
        $this->db->where('DJPid', $id);
        $this->db->update('tbldjph');

        $this->db->set('DJPtanggalverif', date("Y-m-d"));
        $this->db->where('DJPid', $id);
        $this->db->update('tbldjph');

        $this->db->set('DJPtanggalcetak', date("Y-m-d"));
        $this->db->where('DJPid', $id);
        $this->db->update('tbldjph');

        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->db->set('DJPuseridcetak', $userid['id']);
        $this->db->where('DJPid', $id);
        $this->db->update('tbldjph');

        $data['table'] = $this->Model_table->cetaksertifikat($id);
        $this->load->view('operasional/sertifikat', $data);

        //PDF

        $this->load->library('pdfsartifikat');

        $this->data['title_pdf'] = 'Laporan ';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'Legal';
        //   $dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('operasional/sertifikat', $this->data, true);

        // run dompdf
        $this->pdfsartifikat->generate($html, $file_pdf, $paper, $orientation);
    }

    public function pdfdatadjp()
    {

        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_table->cetaksertifikat($id);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $this->load->view('operasional/cetak_ijp', $data);

        //PDF

        $this->load->library('pdfdatadjp');

        $this->data['title_pdf'] = 'Laporan ';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'letter';
        //   $dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('operasional/cetak_ijp', $this->data, true);

        // run dompdf
        $this->pdfdatadjp->generate($html, $file_pdf, $paper, $orientation);
    }

    public function edit()
    {

        //$this->uri->segment(4) = OPK
        // $this->uri->segment(3) = DJPid

        $DJPid = $this->uri->segment(3);
        $OPKid = $this->uri->segment(4);

        $data['ambilgpp'] = $this->Model_Kredit->ambilGPP();
        $data['ambilOPK'] = $this->Model_Kredit->ambilOPK();
        $data['ambilJSP'] = $this->Model_Kredit->ambilJSP();
        $data['ambilSPJ'] = $this->Model_Kredit->ambilSPJ();

        $data['autogen'] = $this->Model_Kredit->noregis();
        $data['autogenurut'] = $this->Model_Kredit->nourut();
        $data['title'] = "Edit";
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['djpsertif'] = $this->Model_table_semua->getSertifNoID();
        $data['djpsertif'] = $this->Model_table_semua->getSertif($DJPid);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/edit', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id)
    {$date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Delete Data Penajaminan") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data Penjaminan') . PHP_EOL .
            "-------------------------" . PHP_EOL;
//-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        echo "<script>
        alert('Data Sertifikat Berhasil Dihapus!');
        window.location.href='table';
        </script>";
    }

    public function reportpdf()
    {

        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_table->cetak($id);
        $this->load->view('operasional/cetak', $data);

        // title dari pdf
        $this->load->library('pdfgenerator');
        $this->data['title_pdf'] = 'Laporan ';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'legal';
        //   $dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
        //orientasi paper potrait / landscape
        $orientation = "landscape";

        $html = $this->load->view('operasional/cetak', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);

        $this->load->view('operasional/lap_bul', $data);
    }

    public function cekdata($id)
    {
        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Checker") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data Penjaminan') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-

        //Ambil Nama
        $query = "SELECT `PPnama`
		 FROM `tbldjph`
		 WHERE `DJPid`= $id
 ";

        $PPnama = $this->db->query($query)->row_array();
        foreach ($PPnama as $p) {
            $ppuser = $p;
        }
        // Send Notifikasi Divisi Penjaminan
        $data = array(
            'comment_subject' => 'Cek Sertifikat',
            'comment_text' => "Sertifikat $ppuser",
            'comment_status' => 0,
            'roleId_sender' => 2, // Kadiv Penjaminan
            'roleId_receiver' => 2, // Staff Penjaminan
        );
        $this->db->insert('tbl_comments', $data);

        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $DJPid = $this->uri->segment(3);

        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data = [

            'DJPuseridverif' => $userid['id'],
        ];
        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $data);

        $data['table'] = $this->Model_table->cetaksertifikat($id);

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('operasional/ceksertif', $data);
        $this->load->library('pdfsartifikat');

        $this->data['title_pdf'] = 'Laporan ';

        // filename dari pdf ketika didownload
        $file_pdf = 'laporan';
        // setting paper
        $paper = 'legal';
        //   $dompdf->set_paper(DEFAULT_PDF_PAPER_SIZE, 'portrait');
        //orientasi paper potrait / landscape
        $orientation = "potrait";

        $html = $this->load->view('operasional/ceksertif', $this->data, true);

        // run dompdf

        $this->pdfsartifikat->generate($html, $file_pdf, $paper, $orientation);

    }

    public function rfa()
    {
        $this->load->model('Model_table');

        $data['title'] = 'Request For Approval';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['rfa'] = $this->Model_table->getRFA();
        $data['request'] = $this->Model_table->requestRFA();
        $data['useraccept'] = $this->Model_table->getUserAcc();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/rfa', $data);
        $this->load->view('template/footer');
    }

    public function inputrfacac()
    {
        $USER = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $DJPid = $_POST['DJP'];
        $RFAcomment = $_POST['RFAcomment'];
        $USERidreq = $USER['id'];
        $USERidapp = 0;

        $this->Model_table->uploadrfa($USERidreq, $USERidapp, $DJPid, $RFAcomment);
        redirect('Table/rfa/');
        // modal data berhasil ditambah dan refresh penjaminan/rfa
    }

    public function accRFA()
    {

        $this->load->model('Model_table');

        $data['title'] = 'Akseptasi Request';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['rfa'] = $this->Model_table->getAkseptasiRFA();
        $data['useraccept'] = $this->Model_table->getUserAcc();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/accrfa', $data);
        $this->load->view('template/footer');

    }

    public function aksepRFA()
    {
        $RFAid = $this->uri->segment(3);
        $DJPid = $this->uri->segment(4);
        $USER = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $RFAcomment = "Sudah Di Acc";
        $USERidapp = $USER['id'];

        $this->Model_table->updateRFA($RFAid, $RFAcomment, $USERidapp, $DJPid);
        redirect('Table/accrfa/');
    }


    public function suratmasuk()
    {
        $data['title'] = 'Surat Masuk Penjaminan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $role = $data['user']['role_id'];
        $data['sm'] = $this->Model_table->getSuratMasuk($role);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/suratmasukvw', $data);
        $this->load->view('template/footer');

    }

    public function suratkeluar()
    {
        $data['title'] = 'Surat Keluar';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['sk'] = $this->Model_table->getSuratKeluarAll();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/suratkeluarvw', $data);
        $this->load->view('template/footer');

    }


    public function inputsk()
    {
        
        $SKtanggalsurat = $_POST['SKtanggalsurat'];
        $SKperihal = $_POST['SKperihal'];
        $SKket = $_POST['SKket'];
        
        $this->Model_table->uploadsk($SKtanggalsurat, $SKperihal, $SKket);
        redirect('table/suratkeluar/');
        // modal data berhasil ditambah dan refresh table/suratkeluar
    }


    
    public function uploaddokumenkeluar()
    {
        $this->load->model('Model_table');
        $SKid = $this->uri->segment(3);

        $config = array(
            'upload_path' => "./uploads/suratkeluar/",
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
                "Aksi: " . ('Surat Keluar') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $this->Model_table->uploadberkassk($UPLDnama, $SKid);
            //data berhasil di upload
        } else {
            echo "<script>
                alert('Berkas Tidak Berhasil Di Upload');
                window.location.href='../../table/suratkeluar';
                </script>";
            //data tidak berhasil di upluad
        }
    }


 
}
