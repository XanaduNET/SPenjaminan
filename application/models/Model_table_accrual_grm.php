<?php
class Model_table_accrual_grm extends CI_Model
{

    public function ambil_data($keyword)
    {
        //    return $this->db->get('tbldjphgrm');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');

        $query = $this->db->get();
        return $query->result();
    }

    public function ambil_data_query($keyword, $GPPchecked, $Tahunchecked)
    {
        $GPPid = $GPPchecked;
        $Tahun = $Tahunchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in('tbldjphgrm.GPPid', $GPPid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);
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

    public function ambil_data_query_opk($keyword, $OPKchecked, $Tahunchecked)
    {
        $OPKid = $OPKchecked;
        $Tahun = $Tahunchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in('tbldjphgrm.OPKid', $OPKid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);
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

    public function ambil_data_query_lengkap($keyword, $GPPchecked, $OPKchecked, $Tahunchecked)
    {
        $GPPid = $GPPchecked;
        $OPKid = $OPKchecked;
        $Tahun = $Tahunchecked;
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in('tbldjphgrm.GPPid', $GPPid);
        $this->db->where_in('tbldjphgrm.OPKid', $OPKid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);
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

    public function ambil_data_query_lengkap_bulan($keyword, $GPPchecked, $OPKchecked, $Monthchecked, $Tahunchecked)
    {
        $GPPid = $GPPchecked;
        $OPKid = $OPKchecked;
        $MONTHid = $Monthchecked;
        $Tahun = $Tahunchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('tbldjphgrm.GPPid', $GPPid);
        $this->db->where_in('tbldjphgrm.OPKid', $OPKid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);
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

    public function ambil_data_query_opk_bulan($keyword, $OPKchecked, $Monthchecked, $Tahunchecked)
    {
        $OPKid = $OPKchecked;
        $MONTHid = $Monthchecked;
        $Tahun = $Tahunchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('tbldjphgrm.OPKid', $OPKid);
        $this->db->where_in('YEAR(DJPtanggalsertifikat)', $Tahun);
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

    public function ambil_data_bulan($keyword, $Monthchecked, $Tahunchecked)
    {

        $MONTHid = $Monthchecked;
        $Tahun = $Tahunchecked;
        //    return $this->db->get('tbldjphgrm');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);

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

    public function ambil_data_maxbulan_perbulan($keyword, $Monthchecked, $Tahunchecked)
    {

        $MONTHid = $Monthchecked;
        $Tahun = $Tahunchecked;
        //    return $this->db->get('tbldjphgrm');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select_max('DJPDtanggalakhir');
        $this->db->select_max('DJPDjangkawaktu');
        $this->db->select_min('DJPDtanggalawal');

        $this->db->from('tbldjphgrm');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);

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

        //    return $this->db->get('tbldjphgrm');
        $this->db->like('DJPnoreg', $keyword);
        $this->db->select_max('DJPDtanggalakhir');
        $this->db->select_max('DJPDjangkawaktu');
        $this->db->select_min('DJPDtanggalawal');

        $this->db->from('tbldjphgrm');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
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

    public function ambil_data_query_bulan($keyword, $GPPchecked, $Monthchecked, $Tahunchecked)
    {
        $MONTHid = $Monthchecked;
        $GPPid = $GPPchecked;
        $Tahun = $Tahunchecked;

        $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tbldjphgrm');
        $this->db->join('tblgpp', 'tbldjphgrm.GPPid=tblgpp.GPPid');
        $this->db->join('tblpks', 'tbldjphgrm.PKSid=tblpks.PKSid');
        $this->db->join('tblspj', 'tbldjphgrm.SPJid=tblspj.SPJid');
        $this->db->join('tbljsp', 'tbldjphgrm.JSPid=tbljsp.JSPid');
        $this->db->join('tbldjpdgrm', 'tbldjphgrm.DJPid=tbldjpdgrm.DJPid');
        $this->db->where_in('tbldjphgrm.GPPid', $GPPid);
        $this->db->where_in("DATE_FORMAT(DJPtanggalverif,'%m')", $MONTHid);
        $this->db->where_in('YEAR(DJPtanggalcetak)', $Tahun);
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

    public function getYear()
    {
        $this->db->distinct();
        $this->db->select('YEAR(DJPtanggalcetak) AS DJPtanggalsertifikat');
        $this->db->from('tbldjphgrm');

        $query = $this->db->get();
        return $query->result();
    }

}
