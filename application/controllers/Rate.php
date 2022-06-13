<?php

class Rate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_rate');
        $this->load->database();
    }

    public function index()
    {
        $data['title'] = 'Rate';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['rate'] = $this->Model_rate->tampilrate()->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/inputrate', $data);
        $this->load->view('template/footer');
    }

}
