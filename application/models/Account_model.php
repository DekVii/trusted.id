<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Account_model extends CI_Model {

	function get_user($id, $level) {
		// var_dump($id); exit();
		// $id = $this->session->userdata('id');

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('level_user', $level);
		$this->db->where('id', $id);

		$query=$this->db->get()->result();

		return $query;

	}

    function get_account($id) {
		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('id', $id);

		$query=$this->db->get();
		return $query->row();
	}

	function insert_account($nama, $username, $email, $kontak, $alamat, $foto, $password) {
		$data = array(
            'username'=> $username,
			'nama'=> $nama,
			'kontak'=> $kontak,
			'alamat'=> $alamat,
			'jenis_kelamin'=> $jenis_kelamin,
			'level_user'=> $level_user,
			'foto_user'=> $foto);
		$this->db->insert('users', $data);
	}


	function update_profile($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}


    function get_all_pb() {
		$this->db->select(' users.*, barang.*');
		$this->db->from('users');
		$this->db->join('toko', 'users.id = toko.id_users');
		$this->db->join('barang', 'toko.id_barang = barang.id_barang', 'right');
		$data=$this->db->get();
		return $data;
    }
    


}
