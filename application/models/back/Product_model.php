<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}


	// public function rules()
	// {

	// 	$Id_barang = $this->session->userdata('Id_barang');

	// 	$this->db->select('*')
	// 	$this->db->from('barang');
	// 	$this->db->join('kategori','barang.Id_kategori = kategori.Id_kategori');
	// 	$this->db->where('kategori.Id_barang', $Id_barang);
	// 	$this->db->order_by('barang.Nama_barang');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	function get_all_barang(){
		$this->db->select('barang.*');
		$this->db->select('kategori.nama_kategori');
		$this->db->from('barang');
		$this->db->join('kategori', 'barang.id_kategori = kategori.id_kategori');
		
		$query=$this->db->get();
		// var_dump($data);exit();
		return $query;
	}

	function edit_model(){

		if (!empty($_FILES["foto_barang"]["name"])) {
			$this->foto_barang = $this->uploadimage();
		}else{
			$this->foto_barang = $post["old_image"];
		}
		$this->db->update('barang',$this,array("Id_barang" => $post["Id_barang"]));
		
	}

	function add_model($data){
		$insert = $this->db->insert('barang',$data);
		return $insert;
	}

	function hapus_model($id) {
		// var_dump($id);exit();
		$aksi = $this->db->delete('barang',array("Id_barang" => $id));
		return $aksi;
	}

	function uploadimage(){
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['file_name'] = $this->Nama_barang;
		$config['overwrite'] = true;
		$config['max_size'] = 5024;

		$this->load->library('upload',$config);
		if ($this->upload->do_upload('foto_barang')) {
			return $this->upload->data("file_name");
		}
	}


public function update($id){
	$data = array(
		'status' => 'Berhasil Disimpan');

	$this->db->where('Id_barang',$id);
	$this->db->update('barang',$data);

}

 //public function edit($id) {
	//if ( !isset($id)) redirect('admin/'); 
	//$Id_barang = $this->Product_model;
	//$Id_kategori = $this->Product_model;
		//$Validation = $this
//}

}

