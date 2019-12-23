<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account_model extends CI_Model {
        
    public function get_id($Id = null) {
        $this->db->select('*');
        $this->db->from('users', '');
        
        if ($Id != null) {
        $this->db->where('Id',$Id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function get_account() {
        $this->db->select('*');
        $this->db->from('users');

        $query = $this->db->get();
        return $query;
    }

    public function get_barang() {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('Barang',$post['Email']);
        $query = $this->db->get();
        return $query;
    }
  
}