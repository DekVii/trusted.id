<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Produk_model extends CI_Model {

    function get_all_barang() {
		$this->db->select('barang.*');
		$this->db->from('barang');

		$query=$this->db->get();
		return $query;
	}

    function get_barang($Id_barang) {
		$this->db->select('barang.*');
		$this->db->from('barang');
		$this->db->where('Id_barang', $Id_barang);

		$hasil=$this->db->get();
		return $hasil->row();
	}


	function insert_produk($data) {
		$this->db->insert('produk', $data);
    }

	
	function update_barang($Id_barang, $data) {
		$this->db->where('Id_barang', $Id_barang);
		$this->db->update('barang', $data);
	}

	function delete_barang($Id_barang) {
		$this->db->where('Id_barang', $Id_barang);
		$this->db->delete('barang');
	}
}