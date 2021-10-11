<?php
class Model_table_accrual extends CI_Model
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

    public function ambil_data_query($keyword, $GPPchecked)
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
            window.location.href='Accrual';
            </script>";
        }
    }

    public function ambil_data_query_opk($keyword, $OPKchecked)
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
            window.location.href='Accrual';
            </script>";
        }
    }

    public function ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked)
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
            window.location.href='Accrual';
            </script>";
        }
    }

    public function ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked)
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
            window.location.href='Accrual';
            </script>";
        }
    }

    public function ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked)
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
            window.location.href='Accrual';
            </script>";
        }
    }


    public function ambil_data_bulan($keyword, $Monthchecked)
        
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
            return $query->result();
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='Accrual';
            </script>";
        }
    }

    
    public function ambil_data_maxbulan_perbulan($keyword, $Monthchecked)
        
    {

        $MONTHid = $Monthchecked;
        //    return $this->db->get('tbldjph');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select_max('DJPDjangkawaktu');
        $this->db->from('tbldjph');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='Accrual';
            </script>";
        }
    }

    public function ambil_data_maxbulan($keyword)
        
    {

        $MONTHid = $Monthchecked;
        //    return $this->db->get('tbldjph');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select_max('DJPDjangkawaktu');
        $this->db->from('tbldjph');
        $this->db->join('tbldjpd', 'tbldjph.DJPid=tbldjpd.DJPid');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='Accrual';
            </script>";
        }
    }


    public function ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked)
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
            window.location.href='Accrual';
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

}
