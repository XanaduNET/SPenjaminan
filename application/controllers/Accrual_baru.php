
<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

class Accrual_baru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_accrual');
        $this->load->model('Model_table_accrual');

    }

    public function index()
    {

        $data['title'] = 'Accrual';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['gpp'] = $this->Model_table_accrual->getGPP();
        $data['opk'] = $this->Model_table_accrual->getOPK();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $OPKchecked = array();
        $GPPchecked = array();
        $Monthchecked = array();
        $keyword = $this->input->post('keyword');

        if (!empty($this->input->post('Month')) && ($this->input->post('Month') == "00")) {

            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {
                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }
                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk($keyword, $OPKchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query($keyword, $GPPchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            } else {

                $data['ambilid'] = $this->Model_accrual->ambilid();
                $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
            }
        } else if (!empty($this->input->post('Month')) && ($this->input->post('Month') != "00")) {

            $Monthchecked[] = $this->input->post('Month');

            // MULAI
            if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (empty($this->input->post('GPPchecked')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('OPKchecked'))) {

                foreach ($this->input->post('OPKchecked') as $obj) {
                    $OPKchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('semuaGPP')) && !empty($this->input->post('semuaOPK'))) {

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $Monthchecked);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else if (!empty($this->input->post('GPPchecked')) && !empty($this->input->post('semuaOPK'))) {

                foreach ($this->input->post('GPPchecked') as $obj) {
                    $GPPchecked[] = $obj;
                }

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked); // pass value to model fn
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            } else {

                $data['ambilid'] = $this->Model_accrual->ambilid();

                $data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword, $Monthchecked);
                $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword, $Monthchecked);
            }

            // END
        } else {

            $data['ambilid'] = $this->Model_accrual->ambilid();

            $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
            $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan($keyword);
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('operasional/accrual_baru', $data);
        $this->load->view('templates/footer', $data);
    }

}

?>
