<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fee_option extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Fee';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('operasional/feeoption', $data);
        $this->load->view('template/footer');
    }
}
