 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_excel extends CI_Model {
 
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
 $this->db->from('tbldjph');
 $this->db->join('tblgpp','tbldjph.GPPid=tblgpp.GPPid');
 $this->db->join('tblpks','tbldjph.PKSid=tblpks.PKSid');
 $this->db->join('tblspj','tbldjph.SPJid=tblspj.SPJid');
 $this->db->join('tbljsp','tbldjph.JSPid=tbljsp.JSPid');
 $this->db->join('tblopk','tbldjph.OPKid =tblopk.OPKid');
 //$this->db->join('tbstatus','tbstatus.idpe=tbsekolah.idpendidikan');
 $query = $this->db->get();
 return $query->result();
      }
 
 }
 