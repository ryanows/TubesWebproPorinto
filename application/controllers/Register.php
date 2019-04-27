<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->model('m_member');
		$this->load->model('m_tukang_jahit');
	}
	public function index()
	{
		$this->load->view('register');
	}

	public function register(){
		$data = array(
			'username' => $this->input->post('username'),
			'nama' => $this->input->post('nama'),
			'password' => $this->input->post('password')
		);
		$result = false;
		if($this->input->post('account_type') == "member"){
			$result = $this->m_member->insert($data);
		} else if($this->input->post('account_type') == "tukang_jahit"){
			$result = $this->m_tukang_jahit->insert($data);
		}
		if($result){
			redirect('login');
		} else {
			$this->session->set_flashdata('register', 'Username sudah terdaftar');
			redirect('register');
		}

	}
}
