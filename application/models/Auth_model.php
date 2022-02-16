<?php

class Auth_model extends CI_model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($data)
    {
        $data = $this->db->get_where('user', array('nama' => $data['nama']));

        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return false;
        }
    }
}
