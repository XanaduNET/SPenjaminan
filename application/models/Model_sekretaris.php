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

    public function uploadsuratmasuk($SMasal, $SMnomor, $SMtanggalsurat, $SMtanggalterima, $SMperihal, $SMuntuk)
    {
        $data = array(
            'SMasal' => $SMasal,
            'SMnomor' => $SMnomor,
            'SMtanggalsurat' => $SMtanggalsurat,
            'SMtanggalterima' => $SMtanggalterima,
            'SMperihal' => $SMperihal,
            'SMuntuk' => $SMuntuk,
            'SMstatus' => 0,
        );

        $this->db->insert('tblsm', $data);
    }

}
