	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

    $this->load->helper('url');
	}
	
    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Menampilkan layout profil >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    public function profile()
    {
        // load view profile
        $id = $this->session->userdata('Id');
        $level = $this->session->userdata('level_user');
        $this->load->model('Account_model');

        $result = array(
            'data_akun' => $this->Account_model->get_user($id,$level),
            'page' => 'front/profile',
        );
        $this->load->view('/front/header', $result);

    }

    public function input_process()
    {
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $kontak = $this->input->post('kontak');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $level_user = $this->input->post('level_user');
        $foto_user = $this->input->post('foto_user');

        $Id = $this->db->insert_id();
        $data_user = array(
            'id' => $Id,
            'id' => $this->session->userdata('id'),
            'username' => $username,
            'nama' => $nama,
            'kontak' => $kontak,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'level_user' => $level_user,
            'foto_user' => $foto
        );
        $this->Account_model->insert_riwayat_stok($data_user);
    }

    //fungsi edit account
    public function edit()
    {	
        $id = $this->session->userdata('Id');
        $level = $this->session->userdata('level_user');
        $this->load->model('Account_model');
        // var_dump($data_user);exit();
        $data = array(			
            'data_user' => $this->Account_model->get_user($id,$level),
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
            'kontak' => $this->input->post('kontak'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'foto_user' => $this->input->post('foto')
        );
        $this->load->model('Account_model');
        $this->Account_model->update_profile($id, $data_post);
        echo "<script type='text/javascript'>alert('Berhasil Ubah Data Account');</script>";
        redirect(base_url('index.php/Main/profile'),'refresh');
    }

    // fungsi logout
    public function logout()
    {
        $params = array('id');
        $this->session->unset_userdata($params);
        redirect(base_url('index.php/auth/login'));
    }
}