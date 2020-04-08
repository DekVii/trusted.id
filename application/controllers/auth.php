<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	
    
    public function login() 
    {
		$status_login = $this->session->userdata('level_user');

		if ($status_login == 'admin' ) {
			$result = array(
				'isi' => 'back/home'
			);
			$this->load->view('/back/head_footer', $result);
			
		} else if($status_login == 'user'){
			$result = array(
				'page' => 'front/profile'
			);
			$this->load->view('/front/template', $result);
		}
		
		else {
			$result = array(
				'page' => 'front/account'
			);
			$this->load->view('/front/template', $result);
		}
        
        
    }
		//fungsi proses login
	public function login_procces()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($post['login']))
		{
			$this->load->model('Auth_model', 'auth');
			$query = $this->auth->login($post);
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$params = array(
					'Id' => $row->id,
					'level_user' => $row->level_user,
					'nama' => $row->Nama,
					'kontak' => $row->Kontak,
					'email' => $row->Email,
					'alamat' => $row->Alamat,
					'username' => $row->Username,
					'foto' => $row->Foto_user
					// 'id_jadwal' => $row->id_jadwal
				);
				$this->session->set_userdata($params);
				// var_dump($this->session->userdata('Id')); exit();
				// var_dump($params); exit();
				$level_user = $row->level_user;

				// $this->session->set_flashdata('flash','Login Berhasil');	

				if($level_user == 'admin'){
					echo "<script type='text/javascript'>alert('Berhasil Login sebagai Admin');</script>";
					redirect(base_url('index.php/admin'),'refresh');      
				}		
				else if($level_user == 'user'){
					echo "<script type='text/javascript'>alert('Berhasil Login');</script>";
					redirect(base_url('index.php/account/profile'),'refresh');      
				}
			       
				
			}

			else
			{
				$this->session->set_flashdata('auth','Gagal');
				
			echo "<script type='text/javascript'>alert('Email dan Password Salah');</script>";
			redirect(base_url('index.php/main'),'refresh');
			}
		}	

	}

	public function register(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['register']))
		{
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$params = array(
					'Id' => $row->Id,
					'level_user' => $row->level_user
					// 'id_jadwal' => $row->id_jadwal
				);
				$this->session->set_userregister($params);
				$level_user = $row->level_user;
			}
			
		}
		
	}

	
	public function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url('index.php/auth/login'),'refresh');
	}
}
