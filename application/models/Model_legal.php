<?php
class Model_legal extends CI_Model
{

    public function ambilcasebycase()
    {
        $getid = $this->db->query("SELECT COUNT(CBCid) AS CBCidhasil FROM tblcbc WHERE CBCstatus = 2");
        return $getid;
    }

    public function ambilcasebycaseproduktif()
    {
        $getid = $this->db->query("SELECT COUNT(CBCPid) AS CBCPidhasil  FROM tblcbcp WHERE CBCPstatus = 2");
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


    public function tambahkomentar($CBClegal, $CBCid)
    {

        $data = array(
            'CBClegal' => $CBClegal,
            'CBCstatus' => 3,
        );
        $this->db->where('CBCid', $CBCid);
        $this->db->update('tblcbc', $data);

    }
    public function tambahkomentarproduktif($CBCPlegal, $CBCPid)
    {

        $data = array(
            'CBCPlegal' => $CBCPlegal,
            'CBCPstatus' => 3,
        );
        $this->db->where('CBCPid', $CBCPid);
        $this->db->update('tblcbcp', $data);

    }
}