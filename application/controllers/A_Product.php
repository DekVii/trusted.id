<?php defined('BASEPATH') OR exit('No direct script access allowed');

class A_Product extends CI_Controller {
	function __construct() {
		parent::__construct();
		// check_user();
		// check_not_login();
		$this->load->model('back/Product_model', 'model');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->model('back/Product_model', 'model');
		$data_b = $this->model->get_all_barang();
		// var_dump($this->data['barang']);exit();
		// $data["Product"]=$this->Product_model->getAll();
		$result = array(
			'data_b' => $data_b,
			'isi' => '/back/list',
		);
		$this->load->view('back/head_footer', $result);
	
	}

	function hapus($id=null) {
		if ( !isset($id)) show_404();

		if ($this->model->hapus_model($id)) {
			redirect('index.php/product_model');
		}

		else {
			echo "data tidak bisa dihapus";
		}
	}

	function edit($id=null) {
		if( !isset($id)) show_404();

		$request=$this->model->edit_model();
	}

	public function tambah(){
		$result = array(
			'isi' => '/back/add',
		);
		$this->load->view('back/head_footer', $result);
	
	}

	public function add_process() {
		$data=array(
			'Nama_barang'=> $this->input->post('namabarang'),
			'Harga_barang' => $this->input->post('hargabarang'),
			'Stok' => $this->input->post('stock'),
			'Deskripsi_barang'=> $this->input->post('deskripsi'),
			'foto_barang' => $this->input->post('foto'),
			'id_kategori'=> $this->input->post('kategori')
		);
		
		$id_barang = $this->db->insert_id();

		if ($data['Nama_barang']==null) {
			redirect(base_url('index.php/a_product/tambah'),'refresh');      
		}

		else {
			$this->load->model('Product_model');
			$request=$this->model->add_model($data);

			if ($request==1) {
				redirect('index.php/a_product');
			}

			else {
				echo "input gagal";
			}
		}


		if ($_FILES['foto_barang']['name'] != null) {
			$upload = $this->upload_image($_FILES, $id_barang);
			if ($upload === TRUE) {
				echo "<script type='text/javascript'>alert('Berhasil Upload Foto');</script>";
			} else {
				echo "<script type='text/javascript'>alert('$upload');</script>";
			}
		}


		// $Product = $this->Product_model;
		// $validation = $this->form_validation;
		// $validation->set_rules($Product->rules());

		// if ($validation->run()) {
		// 	$Product->save();
		// 	$this->session->set_flashdata('Berhasil disimpan');
		// }
		// $this->load->view("admin/Product/new_form");
	}

	public function update ($id=null) {
		$id=$this->input->post('id', TRUE);

		$data=$this->Product_model->update($id);
		echo json_encode($data);
	}

	public function upload_image($data_image, $id_barang)
	{
		$files = $data_image;
		$path = APPPATH . '../foto';
		if(!is_dir($path))
		{
			mkdir($path,0777,TRUE);
		}
		$_FILES['foto_barang']['name']= $files['foto_barang']['name'];
		$_FILES['foto_barang']['type']= $files['foto_barang']['type'];
		$_FILES['foto_barang']['tmp_name']= $files['foto_barang']['tmp_name'];
		$_FILES['foto_barang']['error']= $files['foto_barang']['error'];
		$_FILES['foto_barang']['size']= $files['foto_barang']['size'];

		$konfigurasi = array(
			'allowed_types' =>'jpg|png|jpeg',
			'max_size' => '1000',
			'upload_path' => $path,
			'overwrite' => true
		);
		$this->load->library('upload', $konfigurasi);
		$file = $_FILES['foto_barang']['name'];
		$foto = 'produk_'.str_replace(' ', '_', $file);
		$_FILES['foto_barang']['name'] = $foto;
		if ($this->upload->do_upload('foto_barang')) {
			$data_galleri = array(
				'foto_barang' => $this->upload->data('file_name'),
			);
			$this->load->model('Produk_model');
			$this->Produk_model->update_produk($id_barang, $data_galleri);
		$source_image = $this->upload->data('full_path');
		$this->watermark_foto($source_image);
			return TRUE;
		} else {
			return $this->upload->display_errors();
		}
	}

		public function watermark_foto($source_image)
	{
		$this->load->library('image_lib');
		chmod($source_image,0777);
		$config['source_image'] = $source_image;
		$config['wm_text'] = 'Copyright '.date("Y").' - WP2';
		$config['wm_type'] = 'text';
		$config['wm_font_size'] = '30';
		$config['wm_font_color'] = 'ffffff';
		$config['wm_vrt_alignment'] = 'bottom';
		$config['wm_hor_alignment'] = 'center';
		$config['wm_padding'] = '-50';
		$this->image_lib->initialize($config);
		$this->image_lib->watermark();
		chmod($source_image,0755);
	}
}
