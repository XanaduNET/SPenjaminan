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

    public function insertnotbatch($dataDJPH)
    {
        
        $this->db->insert('tbldjph', $dataDJPH);
        $insertId = $this->db->insert_id();
        if ($this->db->affected_rows() == '1') {
            return $insertId;
        } else {
            return false;
        }

    }

    public function product_list()
    {
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
    }
}
