<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

    $this->load->helper('url');
	}
	
	
	public function index()
	{
		// load view login-register
		$result = array(
			'page' => 'front/home',
		);
		$this->load->view('/front/template', $result);
	}
	

	

	// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Menampilkan layout profil >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function profile()
	{
		// load view profile
		$data_barang = $this->Account_model->get_barang();
		$data_account = $this->Account_model->get_account();

		$result = array(
			'data_akun' => $data_account,
			'data_barang'=> $data_barang,
			'page' => 'front/profile',
		);
		$this->load->view('/front/header', $result);

	}

	public function input_process()
	{
		$data_post = array(
			'nama'=> $this->input->post('nama'),
			'deskripsi_produk'=> $this->input->post('deskripsi_produk'),
		);
		$this->load->model('Account_model');
		$this->Account_model->insert_user($data_post);
		$Id = $this->db->insert_id();
		$data_user = array(
			'id' => $Id,
			'id' => $this->session->userdata('id'),
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'kontak' => $this->input->post('kontak'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'level_user' => $this->input->post('level_user'),
			'foto_user' => $this->input->post('foto_user')
		);
		$this->Produk_model->insert_riwayat_stok($data_user);
		
	}


	//fungsi edit account
	public function edit()
	{	
		$this->load->model('Account_model');
		$data_user = $this->Account_model->get_user();
		$data = array(
			'user' => $data_user,
			'page' => 'front/account/edit_account'
		);
		$this->load->view('front/header', $data);
	}

	public function proses_edit()
	{
		$Id = $this->input->post('id');
		$data_post = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			''


		);
	}

	// fungsi logout
	public function logout()
	{
		$params = array('id');
		$this->session->unset_userdata($params);
		redirect(base_url('index.php/auth/login'));
	}

	

	// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Menampilkan menu menu dan topping >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    public function about()
    {
		$result = array(
			'page' => 'front/about',
		);
		$this->load->view('/front/header', $result);
	}

	public function blog()
	{
		$result = array(
			'page' => 'front/blog',
		);
		$this->load->view('/front/header', $result);
	}

	public function details()
	{
		$result = array(
			'page' => 'front/details',
		);
		$this->load->view('/front/header', $result);
	}

	public function shop()
	{
		$result = array(
			'page' => 'front/shop',
		);
		$this->load->view('/front/header', $result);
	}


	public function contact()
	{
		$result = array(
			'page' => 'front/contact',
		);
		$this->load->view('/front/header', $result);
	}

	public function cart()
	{
		$result = array(
			'page' => 'front/cart',
		);
		$this->load->view('/front/header', $result);
	}

	public function wishlist()
	{
		$result = array(
			'page' => 'front/wishlist',
		);
		$this->load->view('/front/header', $result);
	}

	public function checkout()
	{
		$result = array(
			'page' => 'front/checkout',
		);
		$this->load->view('/front/header', $result);
	}

	public function team()
	{
		$result = array(
			'page' => 'front/team',
		);
		$this->load->view('/front/header', $result);
	}

	public function description()
	{
		$result = array(
			'page' => 'front/description',
		);
		$this->load->view('/front/header', $result);
	}
	// End of FrontEnd

}
