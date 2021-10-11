<?php

class Kredit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Kredit');
        $this->load->database();

    }

    public function index()
    {

        $this->load->library('form_validation');

        $data['ambilgpp'] = $this->Model_Kredit->ambilGPP();
        $data['ambilOPK'] = $this->Model_Kredit->ambilOPK();
        $data['ambilJSP'] = $this->Model_Kredit->ambilJSP();
        $data['ambilSPJ'] = $this->Model_Kredit->ambilSPJ();

        $data['autogen'] = $this->Model_Kredit->noregis();
        $data['autogenurut'] = $this->Model_Kredit->nourut();

        $data['title'] = 'Tambah Data Penjaminan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penjaminan/kredit', $data);
        $this->load->view('templates/footer');

    }

    public function listPKS()
    {
        // Ambil data ID GPP yang dikirim via ajax post
        $GPPid = $this->input->post('GPPid');

        $PKS = $this->Model_Kredit->ambilPKS($GPPid);

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option --Pilih--
        $lists = "<option value=''>--Pilih--</option>";

        foreach ($PKS as $data) {
            if ($data->PKSno2 != null) {
                $lists .= "<option value='" . $data->PKSid . "'>" . $data->PKSno2 . "</option>"; // Tambahkan tag option ke variabel $lists

            } else {
                $lists .= "<option value='" . $data->PKSid . "'>" . $data->PKSno1 . "</option>"; // Tambahkan tag option ke variabel $lists

            }
        }
        $callback = array('list_pks' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_pks

        echo json_encode($callback); // konversi varibael $callback menjadi JSON

    }

    public function autocompletePP()
    {
        if (isset($_GET['term'])) {
            $result = $this->Model_Kredit->cariPP($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row) {
                    $arr_result[] = array(
                        'label' => $row->PPnama,
                        'description' => $row->PPalamat,
                        'id' => $row->PPid,
                    );
                }
                echo json_encode($arr_result);
            }
        }
    }

    public function input()
    {

        $this->form_validation->set_rules('DJPacuanhitung', 'Acuan Hitung IJP', 'required');
        $this->form_validation->set_rules('GPPid', 'Grup Penerima Penaminan', 'required');
        $this->form_validation->set_rules('DJPnoreg', 'Nomor Registrasi', 'required');
        $this->form_validation->set_rules('DJPnourut', 'No Urut', 'required');
        $this->form_validation->set_rules('DJPnoseri', 'No Seri Sertifikat', 'required');
        $this->form_validation->set_rules('PPnama', 'Penerima Penjaminan', 'required');
        $this->form_validation->set_rules('PPalamat', 'Alamat Penjaminan', 'required');
        $this->form_validation->set_rules('DJPnodeklarasi', 'No Deklarasi', 'required');
        $this->form_validation->set_rules('DJPtanggaldeklarasi', 'Tanggal Deklarasi', 'required');
        $this->form_validation->set_rules('DJPperiode', 'Periode Akhir', 'required');
        $this->form_validation->set_rules('PKSid', 'Jenis PKS', 'required');
        $this->form_validation->set_rules('SPJid', 'Status Penjaminan', 'required');
        $this->form_validation->set_rules('JSPid', 'Jenis Pengajuan', 'required');

        $PKSjenis = "PK";

        if ($this->form_validation->run() == false) {

            $this->index();

        } else {

            $DJPacuanhitung = $this->input->post('DJPacuanhitung');
            $GPPid = $this->input->post('GPPid');
            $DJPnoreg = $this->input->post('DJPnoreg');
            $DJPnourut = $this->input->post('DJPnourut');
            $DJPnoseri = $this->input->post('DJPnoseri');
            $PPid = $this->input->post("PPid");
            $PPnama = $this->input->post('PPnama');
            $PPalamat = $this->input->post('PPalamat');
            $DJPnodeklarasi = $this->input->post('DJPnodeklarasi');
            $DJPtanggaldeklarasi = $this->input->post('DJPtanggaldeklarasi');
            $DJPperiode = $this->input->post('DJPperiode');
            $OPKid = $this->input->post('OPKid');
            $PKSid = $this->input->post('PKSid');
            $SPJid = $this->input->post('SPJid');
            $JSPid = $this->input->post('JSPid');

            $this->Model_Kredit->tambah($DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid);
            $insert_id = $this->db->insert_id();

            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Add Data Kredit") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Data Penjaminan') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            redirect('nasabah/' . $insert_id . '/' . $OPKid);

        }
    }

    public function editkredit()
    {
        $this->form_validation->set_rules('DJPacuanhitung', 'Acuan Hitung IJP', 'required');
        $this->form_validation->set_rules('GPPid', 'Grup Penerima Penaminan', 'required');
        $this->form_validation->set_rules('DJPnoreg', 'Nomor Registrasi', 'required');
        $this->form_validation->set_rules('DJPnourut', 'No Urut', 'required');
        $this->form_validation->set_rules('DJPnoseri', 'No Seri Sertifikat', 'required');
        $this->form_validation->set_rules('PPnama', 'Penerima Penjaminan', 'required');
        $this->form_validation->set_rules('PPalamat', 'Alamat Penjaminan', 'required');
        $this->form_validation->set_rules('DJPnodeklarasi', 'No Deklarasi', 'required');
        $this->form_validation->set_rules('DJPtanggaldeklarasi', 'Tanggal Deklarasi', 'required');
        $this->form_validation->set_rules('DJPperiode', 'Periode Sertifikat', 'required');
        $this->form_validation->set_rules('PKSid', 'Jenis PKS', 'required');
        $this->form_validation->set_rules('SPJid', 'Status Penjaminan', 'required');
        $this->form_validation->set_rules('JSPid', 'Jenis Pengajuan', 'required');

        $PKSjenis = "PK";

        if ($this->form_validation->run() == false) {

            $this->index();

        } else {
            $PKSjenis = "PK";
            $DJPid = $this->input->post('DJPid');
            $DJPacuanhitung = $this->input->post('DJPacuanhitung');
            $GPPid = $this->input->post('GPPid');
            $DJPnoreg = $this->input->post('DJPnoreg');
            $DJPnourut = $this->input->post('DJPnourut');
            $DJPnoseri = $this->input->post('DJPnoseri');
            $PPid = $this->input->post("PPid");
            $PPnama = $this->input->post('PPnama');
            $PPalamat = $this->input->post('PPalamat');
            $DJPnodeklarasi = $this->input->post('DJPnodeklarasi');
            $DJPtanggaldeklarasi = $this->input->post('DJPtanggaldeklarasi');
            $DJPperiode = $this->input->post('DJPperiode');
            $OPKid = $this->input->post('OPKid');
            $PKSid = $this->input->post('PKSid');
            $SPJid = $this->input->post('SPJid');
            $JSPid = $this->input->post('JSPid');

            $this->Model_Kredit->update($DJPid, $DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid);

            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Edit Data Kredit") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Data Penjaminan') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            redirect('Kredit/nasabahedit/' . $DJPid . '/' . $OPKid);

        }
    }

    public function nasabahedit()
    {
        $this->load->model('Model_nasabah');
        $DJPid = $this->uri->segment(3);
        $OPKid = $this->uri->segment(4);

        $data['ambilpkrj'] = $this->Model_nasabah->ambilPKRJ();
        $data['title'] = "Edit";
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        //tambahan pengiriman  id melewati disini

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('penjaminan/nasabahedit', $data);
        $this->load->view('templates/footer');
    }
}
