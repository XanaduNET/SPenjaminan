<?php
class Model_direktur extends CI_Model
{

    public function ambilcasebycase()
    {
        $getid = $this->db->query("SELECT COUNT(CBCid) AS CBCidhasil FROM tblcbc WHERE CBCstatus = 3");
        return $getid;
    }

    public function ambilcasebycaseproduktif()
    {
        $getid = $this->db->query("SELECT COUNT(CBCPid) AS CBCPidhasil  FROM tblcbcp WHERE CBCPstatus = 3");
        return $getid;
    }

    public function ambilkur()
    {
        $getid = $this->db->query("SELECT * FROM tblkur");
        $this->db->where('status', '1');
        return $getid;

    }

    public function ambilklaim()
    {
        $getid = $this->db->query("SELECT COUNT(idKlaim) AS idKlaim, SUM(nominal_klaim) AS nominal_klaim, status FROM tblklaim GROUP BY status");
        $this->db->group_by("status");
        return $getid;

    }
    public function ambilsubrogasi()
    {
        $getid = $this->db->query("SELECT COUNT(idSubro) AS idSubro, subproduk FROM tblsubrogasi GROUP BY subproduk");
        return $getid;

    }

    public function ambilpenjaminan()
    {
        $getid = $this->db->query("SELECT COUNT(DJPid) AS DJPid, status FROM tbldjph GROUP BY status");
        return $getid;
    }

    public function getCBC()
    {
        $query = "SELECT `tblcbc`.*, `tbltrjm`.*, `tblpp`.*
        FROM `tblcbc` JOIN `tbltrjm`
        ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
        JOIN `tblpp`
        ON `tblcbc`.`PPid` = `tblpp`.`PPid`
        WHERE `tblcbc`.`CBCstatus` = 3
";
        return $this->db->query($query);
    }

    public function tambahkomentar($CBCdirektur, $CBCid, $CBCkeputusan)
    {
        if ($CBCkeputusan == 4) {
            $CBCstatus = 4;
        } elseif ($CBCkeputusan == 5) {
            $CBCstatus = 5;
        } else {
            $CBCstatus = 4;
        }
        $data = array(
            'CBCdirektur' => $CBCdirektur,
            'CBCstatus' => $CBCstatus,
        );
        $this->db->where('CBCid', $CBCid);
        $this->db->update('tblcbc', $data);

    }

    public function tambahkomentarproduktif($CBCPdirektur, $CBCPid, $CBCPkeputusan)
    {
        if ($CBCPkeputusan == 4) {
            $CBCPstatus = 4;
            
        } elseif ($CBCkeputusan == 5) {
            $CBCPstatus = 5;
        } else {
            $CBCPstatus = 4;
        }

        $data = array(
            'CBCPdirektur' => $CBCPdirektur,
            'CBCPstatus' => $CBCPstatus,
        );
        $this->db->where('CBCPid', $CBCPid);
        $this->db->update('tblcbcp', $data);

    }

    public function getCBCAll()
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
                   WHERE `tblcbcp`.`CBCPstatus` = 3

         ";
        return $this->db->query($query);
    }

}
