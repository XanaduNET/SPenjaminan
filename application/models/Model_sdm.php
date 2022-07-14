<?php
class Model_sdm extends CI_Model
{

    public function getSuratMasuk($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 17


        ";
        return $this->db->query($query)->result_array();
    }

}
