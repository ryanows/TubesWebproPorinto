<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_member extends CI_Model {
	
	public function getAll(){
		return $this->db->get('member')->result_array();
	}

	public function insert($data){
		return $this->db->insert('member', $data);
	}

	public function getByUsernameAndPassword($username, $pass){
		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		return $this->db->get('member')->result_array();
	}

	public function getByUsername($username){
		$this->db->where('username', $username);
		return $this->db->get('member')->result_array()[0];
	}
}