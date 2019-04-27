<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tukang_Jahit extends CI_Controller {

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
	}
	public function index()
	{	
		if(!$this->session->has_userdata('username')){
			redirect('login');
		}
		$this->load->view('home_tukang_jahit');
	}

	public function pesanPakaian(){
		$this->load->view('pesan_pakaian');
	}

	public function lihatPesanan(){
		$this->load->view('lihat_pesanan');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	public function profil(){
		$this->load->view('lihat_profilTukangJahit');
	}
}
