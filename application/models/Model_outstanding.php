<?php
class Model_outstanding extends CI_Model
{

    public function ambil_data()
    {
        //  return $this->db->get('tbldjph');
        // $this->db->like('DJPnoreg',$keyword);
        $this->db->select('*');
        $this->db->from('tbldjpd');
        $this->db->join('tbldjph', 'tbldjpd.DJPid=tbldjph.DJPid');
/* $this->db->join('tbldjph','tbldjpd.DJPid=tbldjph.DJPid');
$this->db->join('tbldjph','tbldjph.DJPid=tblpks.DJPid');*/
// $this->db->join('tblspj','tbldjph.SPJid=tblspj.SPJid');
        // $this->db->join('tbljsp','tbldjph.JSPid=tbljsp.JSPid');
        //$this->db->join('tblopk','tbldjph.OPKid =tblopk.OPKid');

        $query = $this->db->get();
        return $query->result();
    }

    /* function search($keyword)
    {

    $query  =   $this->db->get('tbldjph');
    return $query->result();
    }*/
    public function ambilid()
    {
        $getid = $this->db->query("SELECT * FROM tbldjph");
        $this->db->where('status', '1');
        $this->db->order_by('tbldjpd.DJPDid', 'ASC');
        return $getid;
    }

}
