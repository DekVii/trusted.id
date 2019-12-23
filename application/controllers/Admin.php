<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// load view login-register
		$this->load->view('/back/home');
	}
	
	
	public function profile(){
		$this->load->view('back/profile');
	}

	public function order(){
		$this->load->view('back/order');
	}

	public function product(){
		$this->load->view('back/product');
	}

	public function customers(){
		$this->load->view('back/customers');
	}

	public function chat(){
		$this->load->view('back/chat');
	}

	public function load(){
		$this->load->view('back/load');
	}
}