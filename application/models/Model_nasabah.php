<?php
class Model_nasabah extends CI_Model
{
    public function ambilPKRJ()
    {
        return $this->db->get('tblpkrj')->result();
    }

    public function ambilid()
    {

        $getid = $this->db->query("SELECT * FROM tbldjph");
        $this->db->order_by('DJPid', 'DESC');
        return $getid;
    }

}
