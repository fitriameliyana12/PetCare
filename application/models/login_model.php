<?php

defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function login($user, $password)
    {
        $this->db->from('user');
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}

/* End of file ModelName.php */
