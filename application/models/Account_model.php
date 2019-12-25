<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account_model extends CI_Model {
        
    function get_user(){
        $id = $this->session->userdata('id');

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('level_user');
        $this->db->where('id', $id);

        $query = $this->db->get();

        return $query;

    }

    function insert_account($nama, $username, $email, $contact, $alamat, $foto, $password){
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'contact' =>$contact,
            'alamat' => $alamat,
            'email' => $email,
            'foto'=> $foto
        );
    }

    function get_account() {
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('Email',$post['Email']);
        $this->db->where('Password',$post['Password']);

        $query = $this->db->get();
        return $query;
    }

    function update_profile($id, $username, $email, $contact, $alamat, $foto, $password){
        $data = array(
            'nama' => $nama,
            'username' => $username,
            'contact' =>$contact,
            'alamat' => $alamat,
            'email' => $email,
            'foto'=> $foto
        );

        if (!empty($password)) {
            $data['password'] = $password;
        }

        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    function get_barang() {
        $this->db->select('barang.*');
        $this->db->from('barang');

        $query = $this->db->get();
        return $query;
    }
  
}