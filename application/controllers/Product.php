<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

    $this->load->helper('url');
    }
    
	public function index()
	{
		$this->load->model('Produk_model');
		$data_produk = $this->Produk_model->get_all_barang();

		$result = array(
			'list_data' => $data_produk,
			'page' => 'produk/list_produk',
		);
		$this->load->view('template', $result);
	}
	
	// Fungsi tambah data Barang

	public function add()
	{
		$result = array(
			'page' => 'front/account/add_product',
		);
		$this->load->view('/front/header', $result);
	}


	public function add_product()
	{
		$data_barang = array(
			'Nama_barang' => $this->input->post('Nama_barang'),
			'Deskripsi_barang' => $this->input->post('Deskripsi_barang'),
			'Harga_barang' => $this->input->post('Harga_barang'),
			'Total_item' => $this->input->post('Total_item'),
			'Id_kategori' => $this->input->post('Id_kategori'),
		);
		var_dump($data_barang); exit();
		$this->load->model('Produk_model');
		$data_barang = $this->Produk_model->insert_produk($data_barang);
		$Id_barang = $this->db->insert_id();

		$data_stok = array(
			'id_barang' => $Id_barang,
			'id' => $this->session->userdata('id'),
			'jumlah_perubahan' => $this->input->post('jumlah_perubahan'),
			'stok_saat_ini' => $this->input->post('jumlah_perubahan'),
			'keterangan_log' => 'Stok Awal',
			'jenis_log' => 'masuk'
		);
		$this->Produk_model ->insert_riwayat_stock($data_stok);

		if ($_FILES['foto_produk']['name'] != null) {
			$upload = $this->upload_image($_FILES, $id_produk);
			if ($upload === TRUE) {
				echo "<script type='text/javascript'>alert('Berhasil Upload Foto');</script>";
			} else {
				echo "<script type='text/javascript'>alert('$upload');</script>";
			}
		}

		redirect(base_url('account/profile'),'refresh');
	}

	public function list_p()
	{
		$result = array(
			'page' => 'front/account/list',
		);
		$this->load->view('/front/header', $result);
	}

}