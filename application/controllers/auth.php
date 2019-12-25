<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    
    public function login() 
    {
		
        $result = array(
			'page' => 'front/account'
		);
		$this->load->view('/front/template', $result);
        
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
					'Id' => $row->Id,
					'level_user' => $row->level_user
					// 'id_jadwal' => $row->id_jadwal
				);
				$this->session->set_userdata($params);
				$level_user = $row->level_user;

				// $this->session->set_flashdata('flash','Login Berhasil');	

				if($level_user == 'admin'){
					echo "<script type='text/javascript'>alert('Berhasil Login sebagai Admin');</script>";
					redirect(base_url('index.php/admin'),'refresh');      
				}		
				else if($level_user == 'user'){
					echo "<script type='text/javascript'>alert('Berhasil Login');</script>";
					redirect(base_url('index.php/main/profile'),'refresh');      
				;
				}
				else{
					$this->session->set_flashdata('auth','Level Tidak Diketahui');
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
}
