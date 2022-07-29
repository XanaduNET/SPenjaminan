<?php

class kapenjaminan extends CI_Controller
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


    public function approvalrfa()
    {

        $this->load->model('Model_table');

        $data['title'] = 'Approval Request';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['rfa'] = $this->Model_table->getApprovalRFA();
        $data['useraccept'] = $this->Model_table->getUserAcc();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/approvalrfa', $data);
        $this->load->view('template/footer');

    }

    public function apprfa()
    {
        $RFAid = $this->uri->segment(3);
        $DJPid = $this->uri->segment(4);
        $USER = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $RFAcomment = "ACC Kadiv";
        $USERidapp = $USER['id'];

        $this->Model_table->updateAPPRFA($RFAid, $RFAcomment, $USERidapp, $DJPid);
        redirect('Table/approvalrfa/');
    }

    public function tolakRFA()
    {
        $RFAid = $this->uri->segment(3);
    }

    public function approvalsuratkeluar()
    {
        $data['title'] = 'Approval Surat Keluar';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        
        $data['sk'] = $this->Model_table->getSuratKeluarKadiv();



        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/approvalsk', $data);
        $this->load->view('template/footer');

    }


    public function appsk()
    {
        $SKid = $this->uri->segment(3);
        $user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $SKket = "Di Approve";

        $this->Model_table->updateSKKadiv($SKid, $SKket);
        redirect('kapenjaminan/approvalsuratkeluar/');
    }

}
