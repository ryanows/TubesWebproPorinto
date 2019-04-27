<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		if($this->session->userdata('tipe') == 'member'){
			redirect('member');
		} else if($this->session->userdata('tipe') == 'tukang_jahit'){
			redirect('tukang_jahit');
		} else if($this->session->userdata('tipe') == 'manager'){
			redirect('manager');
		}
	}

	public function member(){
		$this->load->view('home_anggota');
	}
}
