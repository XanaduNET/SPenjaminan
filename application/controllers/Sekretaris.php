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
        $SMasal = $_POST['SMasal'];
        $SMnomor = $_POST['SMnomor'];
        $SMtanggalsurat = $_POST['SMtanggalsurat'];
        $SMtanggalterima = $_POST['SMtanggalterima'];
        $SMperihal = $_POST['SMperihal'];
      

        $this->Model_sekretaris->uploadsuratmasuk($SMasal, $SMnomor, $SMtanggalsurat, $SMtanggalterima, $SMperihal);
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
        $SMid = $_POST['SMid'];
        $SMuntuk = $_POST['ROLEid'];

        $this->Model_sekretaris->updatesuratmasuk($SMid, $SMuntuk);
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
        $SMid = $_POST['SMid'];
        $SMuntuk = $_POST['SMuntuk'];

        $this->Model_sekretaris->updatesuratmasuksekdir($SMid, $SMuntuk);
        redirect('Sekretaris/accsuratmasuk');
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
}
