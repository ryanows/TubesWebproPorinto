<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('m_manager');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$tipe = $this->input->post('account_type');
		$result = false;
		if($tipe == "member"){
			$result = $this->m_member->getByUsernameAndPassword($username, $pass);
		} else if($tipe == "tukang_jahit"){
			$result = $this->m_tukang_jahit->getByUsernameAndPassword($username, $pass);
		} else if($tipe == "manager"){
			$result = $this->m_manager->getByUsernameAndPassword($username, $pass);
		}
		if($result){
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('tipe', $tipe);
			redirect('home');
		} else {
			$this->session->set_flashdata('login', 'Username atau password salah');
			redirect('login');
		}
	}

	public function manager(){
		$this->load->view('login_manager');
	}

	public function tukang_jahit(){
		$this->load->view('login_tukangjahit');
	}
}
