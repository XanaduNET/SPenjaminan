<?php
class Model_sekretaris extends CI_Model
{
    public function getSM()
    {
        $query = "SELECT * FROM `tblsm`";
        return $this->db->query($query)->result_array();
    }
    public function getSMMasuk()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 0";
        return $this->db->query($query)->result_array();
    }
    public function getSMAcc()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 0";
        return $this->db->query($query)->result_array();
    }
    public function getSMUntuk()
    {
        $query = "SELECT * FROM `user_role` WHERE `id` = 4 OR `id` = 20";
        return $this->db->query($query)->result_array();
    }
    public function getSMMasukSekdir()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 1 OR `SMstatus` = 4";
        return $this->db->query($query)->result_array();
    }
    public function getSMAccSekdir()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 1 OR `SMstatus` = 4";
        return $this->db->query($query)->result_array();
    }
    public function getSMMasukDir()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 2";
        return $this->db->query($query)->result_array();
    }
    public function getSMAccDir()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 2";
        return $this->db->query($query)->result_array();
    }
    public function getSMMasukDirum()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 5";
        return $this->db->query($query)->result_array();
    }
    public function getSMAccDirum()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 5";
        return $this->db->query($query)->result_array();
    }
    public function getSMALL()
    {
        $query = "SELECT * FROM `tblsm`";
        return $this->db->query($query)->result_array();
    }


    public function uploadsuratmasuk($SMasal, $SMnomor, $SMtanggalsurat, $SMtanggalterima, $SMperihal)
    {
        $data = array(
            'SMasal' => $SMasal,
            'SMnomor' => $SMnomor,
            'SMtanggalsurat' => $SMtanggalsurat,
            'SMtanggalterima' => $SMtanggalterima,
            'SMperihal' => $SMperihal,
            'SMstatus' => 0,
        );

        $this->db->insert('tblsm', $data);
    }

    public function updatesuratmasuk($SMid, $SMuntuk)
    {   
        if($SMuntuk == "Direktur Utama")
           {
             $SMstatus = 1;
           }
        else if($SMuntuk == "Direktur Umum")
        {
            $SMstatus = 4;
        }

        $data = array(
            'SMuntuk' => $SMuntuk,
            'SMstatus' => $SMstatus,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
    }

    public function updatesuratmasuksekdir($SMid, $SMuntuk)
    {   
        if($SMuntuk == "Direktur Umum"){
            $SMstatus = 5;
        }
        else {
            $SMstatus == 2;
        }
        $data = array(
            'SMid' => $SMid,
            'SMstatus' => $SMstatus,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
    }
    
}
