<?php
class Model_table extends CI_Model
{

    public function ambil_data($keyword)
    {
        //    return $this->db->get('tbldjph');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');

        $query = $this->db->get();
        return $query->result();
    }

    public function ambil_data_query($keyword, $GPPchecked, $halaman)
    {
        $GPPid = $GPPchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in('tbldjph.GPPid', $GPPid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function ambil_data_query_opk($keyword, $OPKchecked, $halaman)
    {
        $OPKid = $OPKchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in('tbldjph.OPKid', $OPKid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
			window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked, $halaman)
    {
        $GPPid = $GPPchecked;
        $OPKid = $OPKchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in('tbldjph.GPPid', $GPPid);
        $this->db->where_in('tbldjph.OPKid', $OPKid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked, $halaman)
    {
        $GPPid = $GPPchecked;
        $OPKid = $OPKchecked;
        $MONTHid = $Monthchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('tbldjph.GPPid', $GPPid);
        $this->db->where_in('tbldjph.OPKid', $OPKid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
			window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $halaman)
    {
        $OPKid = $OPKchecked;
        $MONTHid = $Monthchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('tbldjph.OPKid', $OPKid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
			window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function ambil_data_bulan($keyword, $Monthchecked, $halaman)
    {

        $MONTHid = $Monthchecked;
        //    return $this->db->get('tbldjph');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
			window.location.href='" . $halaman . "';
            </script>";
        }
    }
    public function ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked, $halaman)
    {
        $MONTHid = $Monthchecked;
        $GPPid = $GPPchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjph');
        $this->db->join('tblgpp', 'tbldjph.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjph.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjph.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjph.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in('tbldjph.GPPid', $GPPid);
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
			window.location.href='" . $halaman . "';
            </script>";
        }
    }

    public function getGPP()
    {
        $this->db->select('*');
        $this->db->from('tblgpp');

        $query = $this->db->get();
        return $query->result();
    }

    public function getOPK()
    {
        $this->db->select('*');
        $this->db->from('tblopk');

        $query = $this->db->get();
        return $query->result();
    }
    public function cetak($id)
    {
        $query = $this->db->query("SELECT * FROM tbldjph JOIN tbldjpd on tbldjph.DJPid = tbldjpd.DJPid JOIN tblopk on tbldjph.OPKid = tblopk.OPKid WHERE tbldjph.DJPid='$id'");
        return $query->result();
    }

    public function cetaksertifikat($DJPid)
    {

        $query = $this->db->query("SELECT * FROM tbldjph JOIN tbldjpd on tbldjph.DJPid = tbldjpd.DJPid JOIN tblpks on tbldjph.PKSid = tblpks.PKSid JOIN tblopk on tbldjph.OPKid = tblopk.OPKid JOIN tbljsp on tbldjph.JSPid = tbljsp.JSPid JOIN tblpp on tbldjph.PPid = tblpp.PPid JOIN tblrs on tblpp.RSid = tblrs.Rsid JOIN tbltrjm ON tbldjpd.TRJMid = tbltrjm.TRJMid WHERE tbldjph.DJPid='$DJPid'");
        return $query->result();

    }

    public function getRFA()
    {

        $query = "SELECT `tblrfapenj`.*, `tbldjph`.*, `user`.*
        FROM `tblrfapenj`
        JOIN `tbldjph`
        ON `tblrfapenj`.`DJPid` = `tbldjph`.`DJPid`
        JOIN `user`
        ON `tblrfapenj`.`USERidreq` = `user`.`id`
        ";
        return $this->db->query($query)->result_array();

    }

    public function getAkseptasiRFA()
    {

        $query = "SELECT `tblrfapenj`.*, `tbldjph`.*, `user`.*
        FROM `tblrfapenj`
        JOIN `tbldjph`
        ON `tblrfapenj`.`DJPid` = `tbldjph`.`DJPid`
        JOIN `user`
        ON `tblrfapenj`.`USERidreq` = `user`.`id`
        WHERE `tbldjph`.`DJPcheckerstatus` = 1
        ";
        return $this->db->query($query)->result_array();

    }

    public function getApprovalRFA()
    {

        $query = "SELECT `tblrfapenj`.*, `tbldjph`.*, `user`.*
        FROM `tblrfapenj`
        JOIN `tbldjph`
        ON `tblrfapenj`.`DJPid` = `tbldjph`.`DJPid`
        JOIN `user`
        ON `tblrfapenj`.`USERidreq` = `user`.`id`
        WHERE `tbldjph`.`DJPcheckerstatus` = 2
        ";
        return $this->db->query($query)->result_array();

    }

    public function requestRFA()
    {
        $query = $this->db->query("SELECT * FROM tbldjph WHERE DJPcheckerstatus = 0 ");
        return $query->result_array();
    }

    public function getUserAcc()
    {
        $query = "SELECT `tblrfapenj`.*, `user`.*
        FROM `tblrfapenj`
        JOIN `user`
        ON `tblrfapenj`.`USERidapp` = `user`.`id`

        ";

        return $this->db->query($query)->row_array();
    }
    public function uploadRFA($USERidreq, $USERidapp, $DJPid, $RFAcomment)
    {
        $data = array(
            'USERidreq' => $USERidreq,
            'USERidapp' => $USERidapp,
            'DJPid' => $DJPid,
            'RFAcomment' => $RFAcomment,
        );
        $this->db->insert('tblrfapenj', $data);

        $dataupdate = array(
            'DJPcheckerstatus' => 1, //sudah dicek
            'DJPcheckercount' => 1, //sudah 1 kali cek
        );

        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $dataupdate);
    }

    public function getRFAbyID($RFAid)
    {

        $query = " SELECT `tblrfapenj`.*, `tbldjph`.*, `user`.*
        FROM `tblrfapenj`
        JOIN `tbldjph`
        ON `tblrfapenj`.`DJPid` = `tbldjph`.`DJPid`
        JOIN `user`
        ON `tblrfapenj`.`USERidreq` = `user`.`id`
        WHERE `tblrfapenj`.`RFAid` = $RFAid
        ";
        return $this->db->query($query)->result_array();
    }

    public function updateRFA($RFAid, $RFAcomment, $USERidapp, $DJPid)
    {

        $data = array(
            'RFAcomment' => $RFAcomment,
            'USERidapp' => $USERidapp,
        );
        $this->db->where('RFAid', $RFAid);
        $this->db->update('tblrfapenj', $data);

        $dataupdate = array(
            'DJPcheckerstatus' => 2, //sudah dicek
            'DJPcheckercount' => 2, //sudah 1 kali cek
        );

        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $dataupdate);
    }

    public function updateAPPRFA($RFAid, $RFAcomment, $USERidapp, $DJPid)
    {

        $data = array(
            'RFAcomment' => $RFAcomment,
            'USERidapp' => $USERidapp,
        );
        $this->db->where('RFAid', $RFAid);
        $this->db->update('tblrfapenj', $data);

        $dataupdate = array(
            'DJPcheckerstatus' => 4, //sudah dicek
            'DJPcheckercount' => 3, //sudah 1 kali cek
        );

        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $dataupdate);
    }

    public function getSuratMasuk($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 13
        OR
        `tblsm_notify`.`ROLEid` = 2


        ";
        return $this->db->query($query)->result_array();
    }


    public function getSuratKeluarKadiv()
    {
        $query = "SELECT `tblsk`.*
        FROM `tblsk` WHERE `SKasal` = 2 AND  `SKstatus` = 0
        ";
        return $this->db->query($query)->result_array();
    }


    public function getSuratKeluarAll()
    {
        $query = "SELECT `tblsk`.*
        FROM `tblsk` WHERE `SKstatus` = 0  
        ";
        return $this->db->query($query)->result_array();
    }


    public function uploadsk($SKtanggalsurat, $SKperihal, $SKket)
    {
        $data = array(
            'SKtanggalsurat' => $SKtanggalsurat,
            'SKasal' => 2,
            'SKperihal' => $SKperihal,
            'SKstatus' => 0,
            'SKket' => $SKket,
        );
        $this->db->insert('tblsk', $data);
    }


    public function uploadberkassk($UPLDPnama, $SKid)
    {



            $data = array(
                'UPLDnama' => $UPLDPnama,
                'SKid' => $SKid,
            );


         
            $this->db->insert('tbluploadsk', $data);
    
            echo "<script>
                alert('Data Berhasil Di Upload');
                window.location.href='../../table/suratkeluar';
                </script>";
        }


    public function updateSKKadiv($SKid, $SKket)
    {

        $data = array(
            'SKket' => $SKket,
            'SKstatus' => 1, // Diteruskan kepada Sekper
            
        );

        $this->db->where('SKid', $SKid);
        $this->db->update('tblsk', $data);

        echo "<script>
        alert('Data Berhasil Di Upload');
        window.location.href='../../KaPenjaminan/approvalsuratkeluar';
        </script>";

    }
    


}
