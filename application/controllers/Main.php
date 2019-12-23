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
	
	public function profile()
    {
		$result = array(
			'page' => 'front/profile',
		);
		$this->load->view('/front/header', $result);
	}

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

	// Start of Admin
	public function admin(){
		$this->load->view('back/home');
	}
	

}
