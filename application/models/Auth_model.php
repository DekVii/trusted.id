<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

  public function get($Id = null) {
      $this->db->select('*');
      $this->db->from('users');
       
      if ($Id != null) {
        $this->db->where('Id',$Id);
      }

      $query = $this->db->get();
      return $query;
  }

  public function login($post) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('Email',$post['Email']);
      $this->db->where('Password',$post['Password']);
      $query = $this->db->get();
      return $query;

  }

  public function get_pass($Email) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('Email',$post['Email']);
      $query = $this->db->get();
      return $query;
  }
 
  public function get_level($Email) {
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('Email',$post['Email']);
      $query = $this->db->get();
      return $query;
  }
    
}