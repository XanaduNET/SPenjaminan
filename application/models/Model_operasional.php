<?php
class Model_operasional extends CI_Model
{

    public function getSuratMasuk($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 3


        ";
        return $this->db->query($query)->result_array();
    }

}
