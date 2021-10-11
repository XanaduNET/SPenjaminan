
<?php

defined('BASEPATH') or exit('No direct script access allowed');
require './application/third_party/phpoffice/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Accrual_baru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_accrual');
        $this->load->model('Model_table_accrual');

    }

    public function index()

    {   $Monthchecked = array();

        $keyword = $this->input->post('keyword');
        if (!empty($this->input->post('Month')) && ($this->input->post('Month') == "00")) {
            $data['table'] = $this->Model_table_accrual->ambil_data($keyword);
            $data['maxbulan'] = $this->Model_table_maxbulan->ambil_data_maxbulan($keyword);
        }
        else if (!empty($this->input->post('Month')) && ($this->input->post('Month') != "00")){

            $Monthchecked[] = $this->input->post('Month');

            $data['table'] = $this->Model_table_accrual->ambil_data_bulan($keyword,$Monthchecked);
            $data['bulanmax'] = $this->Model_table_accrual->ambil_data_maxbulan_perbulan($keyword,$Monthchecked);
        }
        else{
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
  