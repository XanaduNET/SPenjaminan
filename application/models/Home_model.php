<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function insert_batch($data)
    {
        $this->db->insert_batch('product', $data);

        if ($this->db->affected_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function insert_batch_grm($dataDJPH)
    {
        $this->db->insert_batch('tbldjphgrm', $dataDJPH);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return $insertId;
        } else {
            return false;
        }
    }

    public function insert_batch_iib($dataDJPH)
    {
        $this->db->insert_batch('tbldjphiib', $dataDJPH);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return $insertId;
        } else {
            return false;
        }
    }

    public function insert_batchdjpd_iib($dataDJPD)
    {
        $this->db->insert_batch('tbldjpdiib', $dataDJPD);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function insert_batchdjpd_grm($dataDJPD)
    {
        $this->db->insert_batch('tbldjpdgrm', $dataDJPD);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

    public function insertnotbatch($dataDJPH)
    {

        $this->db->insert_batch('tbldjph', $dataDJPH);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return $insertId;
        } else {
            return false;
        }

    }
    public function insertbatchtrjm($datatrjm)
    {
        $this->db->insert_batch('tbltrjm', $datatrjm);
        $insertIdTRJM = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return $insertIdTRJM;
        } else {
            return false;
        }
    }

    public function insertbatchdjpd($dataDJPD)
    {
        $this->db->insert_batch('tbldjpd', $dataDJPD);
        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

}
