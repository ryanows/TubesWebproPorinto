<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {

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

	public function getPesanan(){
		$id = $this->input->get('id');
		$username = $this->input->get('username');
		$tk = $this->input->get('tk');
		if($id != null){
			$data = $this->m_pesanan->getById($id);
			echo json_encode($data);
		} else if($username != null){
			if($tk == null){
				$data = $this->m_pesanan->getByMemberUsername($username);
			} else {
				$data = $this->m_pesanan->getByTKUsername($username);
			}
			echo json_encode($data);
		} else {
			$data = $this->m_pesanan->getAll();
			echo json_encode($data);
		}
	}

	public function setStatus(){
		$id_pesanan = $this->input->get('id');
		$status = $this->input->get('status');
		if($status == 2){
			$id_bahan = $this->m_pesanan->getById($id_pesanan)[0]['id_bahan'];
			$jumlah = $this->m_pesanan->getById($id_pesanan)[0]['jumlah'];
			if($this->m_bahan_baku->getStock($id_bahan) >= $jumlah){
				$this->m_bahan_baku->sub($id_bahan, $jumlah);
				$res = $this->m_pesanan->updateStatus($id_pesanan, $status);
				echo json_encode(array("status" => true));
			} else {
				echo json_encode(array("status" => false));
			}
		} else {
			$this->m_pesanan->updateStatus($id_pesanan, $status);
			echo json_encode(array("status" => true));
		}
	}
}
