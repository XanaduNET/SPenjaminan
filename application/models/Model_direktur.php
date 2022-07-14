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

    public function tambahkomentar($CBCdirektur, $CBCid, $CBCkeputusan)
    {
        if ($CBCkeputusan == 4) {
            $CBCstatus = 4;

//Ambil Nama
            $query = "SELECT `tbltrjm`.`TRJMnama`
        FROM `tbltrjm` JOIN `tblcbc`
        ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
        WHERE `tblcbc`.`CBCid`= $CBCid
";
            $trjmnama = $this->db->query($query)->row_array();
            foreach ($trjmnama as $t) {
                $trjmuser = $t;
            }
// Send Notifikasi
            $data = array(
                'comment_subject' => 'Data Case By Case Konsumtif',
                'comment_text' => "SP2K A.n $trjmuser Siap Dicetak",
                'comment_status' => 0,
                'roleId_sender' => 4,
                'roleId_receiver' => 2,
            );
            $this->db->insert('tbl_comments', $data);

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

            //Ambil Nama
            $query = "SELECT `tbltrjm`.`TRJMnama`
        FROM `tbltrjm` JOIN `tblcbcp`
        ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
        WHERE `tblcbcp`.`CBCPid`= $CBCPid
";
            $trjmnama = $this->db->query($query)->row_array();
            foreach ($trjmnama as $t) {
                $trjmuser = $t;
            }
// Send Notifikasi
            $data = array(
                'comment_subject' => 'Data Case By Case Produktif',
                'comment_text' => "SP2K A.n $trjmuser Siap Dicetak",
                'comment_status' => 0,
                'roleId_sender' => 4,
                'roleId_receiver' => 2,
            );
            $this->db->insert('tbl_comments', $data);

        } elseif ($CBCPkeputusan == 5) {
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

    public function getCBCPall()
    {
        $query = "SELECT `tblcbcp`.*, `tbltrjm`.*, `tblpp`.*
                   FROM `tblcbcp` JOIN `tbltrjm`
                   ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
                   JOIN `tblpp`
                   ON `tblcbcp`.`PPid` = `tblpp`.`PPid`


         ";
        return $this->db->query($query);
    }

    public function uploadsuratmasukdirektur($SMid, $ROLEid)
    {
        $data = array(
            'SMid' => $SMid,
            'ROLEid' => $ROLEid,
        );

        $this->db->insert('tblsm_notify', $data);

        $data = array(
            'SMstatus' => 3,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);

        echo "<script>
        alert('Data Berhasil Di Upload');
        window.location.href='../Direktur/suratmasuk';
        </script>";
    }
    public function uploadketdir($SMid, $SMketdir)
    {

        $data = array(
            'SMketdir' => $SMketdir,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
    }
    public function uploadsuratmasukdirekturumum($SMid, $ROLEid)
    {
        $data = array(
            'SMid' => $SMid,
            'ROLEid' => $ROLEid,
        );

        $this->db->insert('tblsm_notify', $data);

        $data = array(
            'SMstatus' => 6,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
        echo "<script>
        alert('Data Berhasil Di Upload');
        window.location.href='../Direktur/suratmasukdirum';
        </script>";
    }
    public function uploadketdirumum($SMid, $SMketdir)
    {

        $data = array(
            'SMketdir' => $SMketdir,
        );
        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
    }

    public function getSuratMasukDirut($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 4


        ";
        return $this->db->query($query)->result_array();
    }
    public function getSuratMasukDirum($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 20


        ";
        return $this->db->query($query)->result_array();
    }
}
