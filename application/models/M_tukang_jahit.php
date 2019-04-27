<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_tukang_jahit extends CI_Model {
	
	public function getAll(){
		return $this->db->get('tukang_jahit')->result_array();
	}

	public function insert($data){
		return $this->db->insert('tukang_jahit', $data);
	}

	public function getByUsernameAndPassword($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		return $this->db->get('tukang_jahit')->result_array();
	}
}