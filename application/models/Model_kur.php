<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_kur extends CI_Model
{
    public function import_data($dataLapbul)
    {
        $jumlah = count($dataLapbul);
        if ($jumlah > 0) {
            $this->db->replace('tblkur', $dataLapbul);
        }
    }

    public function insert($table, $data)
    {
        $this->db->set($data);
        $this->db->insert($table);
        return $this->db->insert_id();
    }
    public function get($tabel, $where)
    {
        $this->db->select("*");
        $this->db->from($tabel);
        $this->db->where($where);
        return $this->db->get();

    }

    //fetch all pictures from db
    public function get_all_docs()
    {
        $docs = $this->db->get('tblimport');
        return $docs->result();
    }
    //save picture data to db
    public function store_docs_data($data)
    {
        $insert_data['idImport'] = $data['idImport'];
        $insert_data['importdata'] = $data['importdata'];
        $query = $this->db->insert('tblimport', $insert_data);
    }

    public function cetakexcelsemua()
    {

        $query = $this->db->query("SELECT * FROM tblkur");
        return $query->result();

    }

    public function ambil_data_query_lengkap($Tahunchecked, $Monthchecked)
    {
        $Tahunid = $Tahunchecked;
        $Bulanid = $Monthchecked;

        // $this->db->like('DJPnoreg', $keyword);
        $this->db->select('*');
        $this->db->from('tblkur');
        $this->db->where_in("DATE_FORMAT(tanggal_terbit,'%Y')", $Tahunid);
        $this->db->where_in("DATE_FORMAT(tanggal_terbit,'%m')", $Bulanid);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='kur';
            </script>";
        }
    }

    public function ambil_data($keyword)
    {

        $this->db->like('tanggal_terbit', $keyword);
        $this->db->select('*');
        $this->db->from('tblkur');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAll()
    {
        $this->db->select("*");
        $this->db->from("tblkur");
        return $this->db->get()->result_array();
    }
    public function getDataBulan($where)
    {
        $this->db->select("*");
        $this->db->from("tblkur");
        $this->db->where_in("bulan", $where);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $query->result_array(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='lapbul_bulan';
            </script>";
        }
    }
    public function get_year($year)
    {
        $query = "SELECT * FROM `tblkur` WHERE FROM_UNIXTIME(`date_created`, '%Y') = $year";
        $queryhasil = $this->db->query($query);

        if ($queryhasil->num_rows() > 0) {
            // echo $this->db->last_query()."<br>";
            return $queryhasil->result_array(); // return an array of objects
        } else {
            echo "<script>
            alert('Data Tidak Ditemukan');
            window.location.href='lapbul';
            </script>";
        }
    }

}
