<?php
class Model_fee extends CI_Model
{

    public function ambilid()
    {
        $getid = $this->db->query("SELECT * FROM tbldjph");
        $this->db->where('status', '1');
        $this->db->order_by('tbldjpd.DJPDid', 'ASC');
        return $getid;
    }

}
