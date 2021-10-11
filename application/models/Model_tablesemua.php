<?php
class Model_tablesemua extends CI_Model
{

    public function ambilid()
    {

        $getid = $this->db->query("SELECT * FROM tbldjph");
        $this->db->order_by('tbldjpd.DJPDid', 'ASC');
        return $getid;
    }

}
