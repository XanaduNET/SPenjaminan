<?php
class Model_risk extends CI_Model
{
    public function ambilcasebycase()
    {
        $getid = $this->db->query("SELECT COUNT(CBCid) AS CBCidhasil FROM tblcbc WHERE CBCstatus = 1");
        return $getid;
    }

    public function ambilcasebycaseproduktif()
    {
        $getid = $this->db->query("SELECT COUNT(CBCPid) AS CBCPidhasil  FROM tblcbcp WHERE CBCPstatus = 1");
        return $getid;
    }

    public function getCBC()
    {
        $query = "SELECT `tblcbc`.*, `tbltrjm`.*, `tblpp`.*
                   FROM `tblcbc` JOIN `tbltrjm`
                   ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
                   JOIN `tblpp`
                   ON `tblcbc`.`PPid` = `tblpp`.`PPid`

         ";
        return $this->db->query($query);
    }

    public function getCBCP()
    {
        $query = "SELECT `tblcbcp`.*, `tbltrjm`.*, `tblpp`.*
                   FROM `tblcbcp` JOIN `tbltrjm`
                   ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
                   JOIN `tblpp`
                   ON `tblcbcp`.`PPid` = `tblpp`.`PPid`

         ";
        return $this->db->query($query);
    }

    public function tambahkomentar($CBCmr, $CBCid)
    {

        $data = array(
            'CBCmr' => $CBCmr,
            'CBCstatus' => 2,
        );
        $this->db->where('CBCid', $CBCid);
        $this->db->update('tblcbc', $data);

    }

    public function tambahkomentarproduktif($CBCPmr, $CBCPid)
    {

        $data = array(
            'CBCPmr' => $CBCPmr,
            'CBCPstatus' => 2,
        );
        $this->db->where('CBCPid', $CBCPid);
        $this->db->update('tblcbcp', $data);

    }

    public function getSuratMasuk($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` =7


        ";
        return $this->db->query($query)->result_array();
    }

}
