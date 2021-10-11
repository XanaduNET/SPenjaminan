<?php
class Model_subrogasi extends CI_Model
{


    	 public function ambil_data()
    {

    	//  $this->db->like('tglmasuk', $keyword);
    	   $this->db->select('*');
        $this->db->from('tblsubrogasi');
       /* $getid = $this->db->query("SELECT * FROM tblklaim");
        return $getid;*/
        $query = $this->db->get();
        return $query->result();
    }
 
	

	public function cetakexcel($id){

        $query = $this->db->query("SELECT * FROM tblklaim  WHERE tblklaim.tglmasuk='$id'");
        return $query->result();
    
    }  
    public function cetakexcelsemua(){

        $query = $this->db->query("SELECT * FROM tblklaim");
        return $query->result();
    
    }  
}