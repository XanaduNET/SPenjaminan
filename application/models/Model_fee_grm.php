<?php
class Model_fee_grm extends CI_Model
{

    public function ambilid()
    {
        $getid = $this->db->query("SELECT * FROM tbldjphgrm");
        $this->db->where('status', '1');
        $this->db->order_by('tbldjpdgrm.DJPDid', 'ASC');
        return $getid;
    }

}
