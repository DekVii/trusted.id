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
		$result = array(
			'isi' => '/back/home',
		);
		$this->load->view('back/head_footer', $result);
	}
	
	
	public function profile(){
		$result = array(
			'isi' => '/back/profile',
		);
		$this->load->view('back/head_footer', $result);
	}


	

	// --------------------------------------------- Purchase --------------------------------------------------


	public function list_purchase(){
		$result = array(
			'isi' => '/back/list_ph',
		);
		$this->load->view('back/head_footer', $result);
	}

	

	// ---------------------------------------------   --------------------------------------------------

	public function customers(){
		$result = array(
			'isi' => '/back/customers',
		);
		$this->load->view('back/head_footer', $result);
	}

	public function report(){
		
		$result = array(
			'isi' => '/back/report',
		);
		$this->load->view('back/head_footer', $result);
	}

	public function load(){
		$result = array(
			'isi' => '/back/load',
		);
		$this->load->view('back/head_footer', $result);
	}
}