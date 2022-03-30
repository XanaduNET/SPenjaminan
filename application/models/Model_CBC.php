c  <?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_CBC extends CI_Model
{
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

    public function getCBCid($id)
    {
        $query = "SELECT `tblcbc`.*, `tbltrjm`.*, `tblpp`.*,`tbldaerah`.*,`tblgpp`.*,`tblpks`.*
                   FROM `tblcbc` JOIN `tbltrjm`
                   ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
                   JOIN `tblpp`
                   ON `tblcbc`.`PPid` = `tblpp`.`PPid`
                   JOIN `tbldaerah`
                   ON `tblpp`.`DAERAHid` = `tbldaerah`.`DAERAHid`
                   JOIN `tblgpp`
                   ON `tblgpp`.`GPPid` = `tblpp`.`GPPid`
                   JOIN `tblpks`
                   ON `tblpks`.`GPPid` = `tblpp`.`GPPid`
                   WHERE `tblcbc`.`CBCid` = $id
         ";
        return $this->db->query($query);
    }

    public function upload($UPLDnama, $CBCid, $CBCstatus)
    {

        $data = array(
            'UPLDnama' => $UPLDnama,
            'CBCid' => $CBCid,
        );
        $this->db->insert('tblupload', $data);

        $data = array(
            'CBCstatus' => $CBCstatus,
        );
        $this->db->where('CBCid', $CBCid);
        $this->db->update('tblcbc', $data);

        echo "<script>
            alert('Data Berhasil Di Upload');
            window.location.href='../../casebc/datacbc';
            </script>";
    }
    public function uploadcbcp($UPLDPnama, $CBCPid, $CBCPstatus)
    {

        $data = array(
            'UPLDPnama' => $UPLDPnama,
            'CBCPid' => $CBCPid,
        );
        $this->db->insert('tbluploadcbcp', $data);

        $data = array(
            'CBCPstatus' => $CBCPstatus,
        );
        $this->db->where('CBCPid', $CBCPid);
        $this->db->update('tblcbcp', $data);

        echo "<script>
            alert('Data Berhasil Di Upload');
            window.location.href='../../casebc/datacbc';
            </script>";
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

    public function getCBCPbyid($id)
    {
        $query = "SELECT `tblcbcp`.*, `tbltrjm`.*, `tblpp`.*, `tbldaerah`.*,`tblgpp`.*,`tblpks`.*
                   FROM `tblcbcp` JOIN `tbltrjm`
                   ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
                   JOIN `tblpp`
                   ON `tblcbcp`.`PPid` = `tblpp`.`PPid`
                   JOIN `tbldaerah`
                   ON `tblpp`.`DAERAHid` = `tbldaerah`.`DAERAHid`
                   JOIN `tblgpp`
                   ON `tblgpp`.`GPPid` = `tblpp`.`GPPid`
                   JOIN `tblpks`
                   ON `tblpks`.`GPPid` = `tblpp`.`GPPid`
                   WHERE `tblcbcp`.`CBCPid` = $id
         ";
        return $this->db->query($query);
    }

    public function getCBCPJAbyid($id)
    {
        $query = "SELECT `tblcbcp`.*, `tblja`.*
                    FROM `tblcbcp` JOIN `tblja`
                   ON `tblcbcp`.`CBCPid` = `tblja`.`CBCPid`
                   WHERE `tblcbcp`.`CBCPid` = $id
         ";
        return $this->db->query($query);
    }

    public function getCBCPOJKbyid($id)
    {
        $query = "SELECT `tblcbcp`.*, `tblcbcpojk`.*
                FROM `tblcbcp`
                JOIN `tblcbcpojk`
                ON`tblcbcp`.`cbcpid` = `tblcbcpojk`.`cbcpid`
               WHERE `tblcbcp`.`CBCPid` = $id
     ";
        return $this->db->query($query);
    }

    public function getCBCPpendapatanbyid($id)
    {
        $query = "SELECT `tblcbcp`.*, `tblcbcppendapatan`.*
                FROM `tblcbcp`
                JOIN `tblcbcppendapatan`
                ON`tblcbcp`.`cbcpid` = `tblcbcppendapatan`.`cbcpid`
               WHERE `tblcbcp`.`CBCPid` = $id
     ";
        return $this->db->query($query);
    }

    public function getCBCPpengeluaranbyid($id)
    {
        $query = "SELECT `tblcbcp`.*, `tblcbcppengeluaran`.*
                FROM `tblcbcp`
                JOIN `tblcbcppengeluaran`
                ON`tblcbcp`.`cbcpid` = `tblcbcppengeluaran`.`cbcpid`
               WHERE `tblcbcp`.`CBCPid` = $id
     ";
        return $this->db->query($query);
    }

    public function getCBCberkas($id)
    {
        $query = "SELECT `tblcbc`.*, `tbltrjm`.*, `tblpp`.*
        FROM `tblcbc` JOIN `tbltrjm`
        ON `tblcbc`.`TRJMid` = `tbltrjm`.`TRJMid`
        JOIN `tblpp`
        ON `tblcbc`.`PPid` = `tblpp`.`PPid`
";
        return $this->db->query($query);
    }

    public function getCBCberkasupload($id)
    {
        $query = "SELECT `tblcbc`.*, `tblupload`.*
         FROM `tblcbc` JOIN `tblupload`
        ON `tblcbc`.`CBCid` = `tblupload`.`CBCid`

";
        return $this->db->query($query);
    }

    public function getCBCPberkas($id)
    {
        $query = "SELECT `tblcbcp`.*, `tbltrjm`.*, `tblpp`.*
        FROM `tblcbcp` JOIN `tbltrjm`
        ON `tblcbcp`.`TRJMid` = `tbltrjm`.`TRJMid`
        JOIN `tblpp`
        ON `tblcbcp`.`PPid` = `tblpp`.`PPid`
";
        return $this->db->query($query);
    }

    public function getCBCPberkasupload($id)
    {
        $query = "SELECT `tblcbcp`.*, `tbluploadcbcp`.*
         FROM `tblcbcp` JOIN `tbluploadcbcp`
        ON `tblcbcp`.`CBCPid` = `tbluploadcbcp`.`CBCPid`

";
        return $this->db->query($query);
    }
}
