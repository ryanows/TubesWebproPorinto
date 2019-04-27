<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_manager extends CI_Model {
	
	public function getAll(){
		return $this->db->get('manager')->result_array();
	}

	public function insert($data){
		return $this->db->insert('manager', $data);
	}

	public function getByUsernameAndPassword($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		return $this->db->get('manager')->result_array();
	}
}