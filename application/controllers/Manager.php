<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

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
		$this->load->model('m_member');
		$this->load->model('m_tukang_jahit');
		$this->load->model('m_pesanan');
	}
	public function index()
	{	
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('home_manager');
	}

	public function tambahBahanBaku(){
		
		$this->load->view('tambah_bahan_baku');
	}

	public function addBahanBaku(){
		$data = array(
			"nama" => $this->input->post('nama'),
			"stok" => $this->input->post('stok')
		);
		$res = $this->m_bahan_baku->insert($data);
		if($res){
			$this->session->set_flashdata('status', '<div class="alert alert-success"><strong>Berhasil menambahkan bahan baku</strong></div>');
			redirect("manager/tambahBahanBaku");
		} else {
			$this->session->set_flashdata('status', '<div class="alert alert-danger"><strong>Gagal menambahkan bahan baku</strong></div>');
			redirect("manager/tambahBahanBaku");
		}
	}

	public function getBahanBaku(){
		$data = $this->m_bahan_baku->getAll();
		echo json_encode($data);
	}

	public function getMember(){
		$data = $this->m_member->getAll();
		echo json_encode($data);
	}

	public function getTukangJahit(){
		$data = $this->m_tukang_jahit->getAll();
		echo json_encode($data);
	}

	public function getPesanan(){
		$data = $this->m_pesanan->getAll();
		echo json_encode($data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function lihatSemuaBahanBaku(){
		$this->load->view('lihat_BahanBaku');
	}
	public function lihatSemuaPesanan(){
		$this->load->view('lihat_pesananDariManager');
	}
}
