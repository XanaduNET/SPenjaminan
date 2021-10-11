<?php
class Model_klaim extends CI_Model
{

    public function ambil_data($keyword)
    {

        $this->db->like('tglmasuk', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        /* $getid = $this->db->query("SELECT * FROM tblklaim");
        return $getid;*/
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah($idKlaim, $tglmasuk, $tglberkas, $tglklaimbayar, $PPnama, $PPalamat, $produk, $sertifikat, $nmterjamin, $plafond, $nilai_jaminan, $coverage, $nominal_klaim, $subrogasi, $agunan, $taksasi_agunan, $Jkwaktu, $tglawal, $tglakhir, $macet, $sektor, $cover_reas, $klaim_reas, $broker)
    {

        $data = array(

            'idKlaim' => $idKlaim,
            'tglmasuk' => $tglmasuk,
            'tglberkas' => $tglberkas,
            'tglklaimbayar' => $tglklaimbayar,
            'PPnama' => $PPnama,
            'PPalamat' => $PPalamat,
            'produk' => $produk,
            'sertifikat' => $sertifikat,
            'nmterjamin' => $nmterjamin,
            'plafond' => $plafond,
            'nilai_jaminan' => $nilai_jaminan,
            'coverage' => $coverage,
            'nominal_klaim' => $nominal_klaim,
            'subrogasi' => $subrogasi,
            'agunan' => $agunan,
            'taksasi_agunan' => $taksasi_agunan,
            'Jkwaktu' => $Jkwaktu,
            'tglawal' => $tglawal,
            'tglakhir' => $tglakhir,
            'macet' => $macet,
            'sektor' => $sektor,
            'cover_reas' => $cover_reas,
            'klaim_reas' => $klaim_reas,
            'broker' => $broker,

        );
        $this->db->insert('tblklaim', $data);

    }

    public function cetakexcel($id)
    {

        $query = $this->db->query("SELECT * FROM tblklaim  WHERE tblklaim.tglmasuk='$id'");
        return $query->result();

    }
    public function cetakexcelsemua()
    {

        $query = $this->db->query("SELECT * FROM tblklaim");
        return $query->result();

    }

    public function ambil_data_query_lengkap($Tahunchecked, $Monthchecked, $Statuschecked)
    {
        $Tahunid = $Tahunchecked;
        $Bulanid = $Monthchecked;
        $Statusid = $Statuschecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%Y')", $Tahunid);
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%m')", $Bulanid);
        $this->db->where_in("Status", $Statusid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='data_klaim';
            </script>";
        }
    }

    public function ambil_data_query_tahun($Tahunchecked)
    {
        $Tahunid = $Tahunchecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%Y')", $Tahunid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='data_klaim';
            </script>";
        }
    }
    public function ambil_data_query_tahun_bulan($Tahunchecked, $Monthchecked)
    {
        $Tahunid = $Tahunchecked;
        $Bulanid = $Monthchecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%Y')", $Tahunid);
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%m')", $Bulanid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
                alert('Data Tidak Ditemukan');
                window.location.href='data_klaim';
                </script>";
        }
    }
    public function ambil_data_query_tahun_status($Tahunchecked, $Statuschecked)
    {
        $Tahunid = $Tahunchecked;
        $Statusid = $Statuschecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%Y')", $Tahunid);
        $this->db->where_in("Status", $Statusid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
                alert('Data Tidak Ditemukan');
                window.location.href='data_klaim';
                </script>";
        }
    }
    public function ambil_data_query_bulan($Monthchecked)
    {

        $Bulanid = $Monthchecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%m')", $Bulanid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='data_klaim';
            </script>";
        }
    }
    public function ambil_data_query_bulan_status($Monthchecked, $Statuschecked)
    {

        $Bulanid = $Monthchecked;
        $Statusid = $Statuschecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("DATE_FORMAT(tglmasuk,'%m')", $Bulanid);
        $this->db->where_in("Status", $Statusid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='data_klaim';
            </script>";
        }
    }
    public function ambil_data_query_status($Statuschecked)
    {
        $Statusid = $Statuschecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblklaim');
        $this->db->where_in("Status", $Statusid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='data_klaim';
            </script>";
        }
    }
}
