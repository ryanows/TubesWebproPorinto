<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->load->model('m_bahan_baku');
		$this->load->model('m_tukang_jahit');
		$this->load->model('m_pesanan');
		$this->load->model('m_member');
	}
	public function index()
	{	
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('home_member');
	}

	public function pesanPakaian(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$bahan_baku = $this->m_bahan_baku->getAll();
		$tukang_jahit = $this->m_tukang_jahit->getAll();
		$data['bahan_baku'] = $bahan_baku;
		$data['tukang_jahit'] = $tukang_jahit;
		$this->load->view('pesan_pakaian', $data);

		
	}

	public function addPesanan(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$config = array(
			"upload_path" => "uploads/",
			"allowed_types" => "jpg|png|jpeg|svg",
			"max_size" => "2048000",
			"max_height" => "4080",
			"max_width" => "4080"
		);
		
		
		$post = array(
			"jumlah" => $this->input->post("jumlah"),
			"ukuran" => $this->input->post("ukuran"),
			"id_bahan_baku" => $this->input->post("bahan_baku"),
			"warna" => $this->input->post("warna"),
			"id_tukang_jahit" => $this->input->post("tukang_jahit"),
			"catatan" => $this->input->post("note"),
			"front_x" => $this->input->post("front-x"),
			"front_y" => $this->input->post("front-y"),
			"front_size" => $this->input->post("front-size"),
			"back_x" => $this->input->post("back-x"),
			"back_y" => $this->input->post("back-y"),
			"back_size" => $this->input->post("back-size"),
			"id_member" => $this->m_member->getByUsername($this->session->userdata('username'))['id'],
			"tanggal" => date('y-m-d'),
			"status" => 1
		);

		if($post['ukuran'][0] == '-' || $post['id_bahan'][0] == '-' || $post['id_tukang_jahit'][0] == '-' || $post['jumlah'] == null){
			$this->session->set_flashdata('status', "<div class='alert alert-danger'>Tidak boleh ada data yang kosong kecuali catatan</div>");
			redirect('member/pesanPakaian');
		}

		$this->load->library('upload', $config);
		if($this->upload->do_upload('img')){
			$data = array('upload_data' => $this->upload->data());
			$post['logo'] = $data['upload_data']['file_name'];
			$this->m_pesanan->insert($post);
			$this->session->set_flashdata('status', "<div class='alert alert-success'>Berhasil memesan pakaian</div>");
			redirect('member/pesanPakaian');
		} else {
			$error = array("error" => $this->upload->display_errors());
			$this->session->set_flashdata('status', "<div class='alert alert-danger'>Pilih gambar terlebih dahulu</div>");
			redirect('member/pesanPakaian');
		}
	}

	public function lihatPesanan(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('lihat_pesanan');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function profil(){
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('lihat_profilMember');
	}

}
