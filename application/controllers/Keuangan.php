<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_keuangan');

    }

    public function suratmasuk()
    {
        $data['title'] = 'Surat Masuk Keuangan';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $role = $data['user']['role_id'];
        $data['sm'] = $this->Model_keuangan->getSuratMasuk($role);

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('keuangan/suratmasukvw', $data);
        $this->load->view('template/footer');

    }
}
