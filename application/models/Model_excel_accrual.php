 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_excel_accrual extends CI_Model {
 
      //constructor untuk class Model_buku
      public function __construct(){
           //load constructor CI_Model
           parent::__construct();
 
           //load database
           $this->load->database();
      }
 
      // ambil data dari tabel 'tbl_buku'
      public function getAll() {
     $this->db->select('*');
 $this->db->from('tbldjpd');
  $this->db->join('tbldjph','tbldjpd.DJPid=tbldjph.DJPid');
/* $this->db->join('tbldjph','tbldjpd.DJPid=tbldjph.DJPid');
 $this->db->join('tbldjph','tbldjph.DJPid=tblpks.DJPid');*/
// $this->db->join('tblspj','tbldjph.SPJid=tblspj.SPJid');
// $this->db->join('tbljsp','tbldjph.JSPid=tbljsp.JSPid');
 //$this->db->join('tblopk','tbldjph.OPKid =tblopk.OPKid');

 $query = $this->db->get();
 return $query->result();
      }
 
 }
 