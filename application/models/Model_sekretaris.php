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
    public function getSKAcc()
    {
        $query = "SELECT `tblsk`.*, `user_role`.*
        FROM `tblsk` JOIN `user_role`
        ON `tblsk`.`SKasal` = `user_role`.`id`
        WHERE `SKstatus` = 1

";
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
    public function getSKDir()
    {
        $query = "SELECT * FROM `tblsk` WHERE `SKstatus` = 2";
        return $this->db->query($query)->result_array();
    }
    public function getSKDiv()
    {
        $query = "SELECT `tblsk`.*, `user_role`.*
        FROM `tblsk` JOIN `user_role`
        ON `tblsk`.`SKasal` = `user_role`.`id`
        WHERE `SKstatus` = 4

";
        return $this->db->query($query)->result_array();
    }
    public function getSMAccDir()
    {
        $query = "SELECT * FROM `tblsm` WHERE `SMstatus` = 2";
        return $this->db->query($query)->result_array();
    }
    public function getSKAccDir()
    {
        $query = "SELECT * FROM `tblsk` WHERE `SKstatus` = 2";
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

    public function getSKAll()
    {
        $query = "SELECT `tblsk`.*, `user_role`.*
        FROM `tblsk` JOIN `user_role`
        ON `tblsk`.`SKasal` = `user_role`.`id`
        WHERE `SKstatus` = 1

";
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
        if ($SMuntuk == "Direktur Utama") {
            $SMstatus = 1;
        } else if ($SMuntuk == "Direktur Umum") {
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
        if ($SMuntuk == "Direktur Umum") {
            $SMstatus = 5;
        } else if ($SMuntuk == "Direktur Utama") {
            $SMstatus = 2;
        }
        $data = array(
            'SMid' => $SMid,
            'SMstatus' => $SMstatus,
        );

        $this->db->where('SMid', $SMid);
        $this->db->update('tblsm', $data);
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

    public function upload($UPLDPnama, $SMid)
    {

        $data = array(
            'UPLDnama' => $UPLDPnama,
            'SMid' => $SMid,
        );
        $this->db->insert('tbluploadsm', $data);

        echo "<script>
            alert('Data Berhasil Di Upload');
            window.location.href='../../sekretaris/suratmasuk';
            </script>";
    }

    public function getSuratMasuk($role)
    {
        $query = "SELECT `tblsm`.*, `tblsm_notify`.*
        FROM `tblsm`
        JOIN `tblsm_notify`
        ON `tblsm`.`SMid` = `tblsm_notify`.`SMid`
        WHERE `tblsm_notify`.`ROLEid` = 14
        OR
        `tblsm_notify`.`ROLEid` = 15
        OR
        `tblsm_notify`.`ROLEid` = 16


        ";
        return $this->db->query($query)->result_array();
    }


    public function updatesuratkeluar($SKid, $SKuntuk)
    {
        if ($SKuntuk == "Direktur Utama") {
            $SKstatus = 2;
        } else if ($SKuntuk == "Direktur Umum") {
            $SKstatus = 5;
        }

        $data = array(
            'SKuntuk' => $SKuntuk,
            'SKstatus' => $SKstatus,
        );
        $this->db->where('SKid', $SKid);
        $this->db->update('tblsk', $data);
    }


    public function nomorsk($SKid)
    {
        
        $query = "SELECT `tblsk`.*, `user_role`.*
        FROM `tblsk` JOIN `user_role`
        ON `tblsk`.`SKasal` = `user_role`.`id`
        WHERE `SKid` = $SKid    
";
        $q = $this->db->query($query)->result_array();
        
        $query2 = "SELECT MAX(`NSnomor`) as NSnomor
        FROM `tblnomorsurat`
";  
        $q2 = $this->db->query($query2)->result_array();
        $q2plus = $q2[0]['NSnomor'] + 1; 
    
        $data = array(
            'NSdivisi' => $q[0]['SKasal'],
            'NSperihal' => $q[0]['SKperihal'],
            'NSnomor' => $q2plus,
        );


        $data2 = array(
            'SKnomor' => $q2plus,
        );
        
        $this->db->where('SKid', $SKid);
        $this->db->update('tblsk', $data2);
    }


}
