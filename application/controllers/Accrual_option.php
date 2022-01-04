<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accrual_option extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Accrual';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('operasional/accrualoption', $data);
        $this->load->view('template/footer');
    }
}
