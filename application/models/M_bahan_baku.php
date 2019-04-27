<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_bahan_baku extends CI_Model {
	
	public function getAll(){
		return $this->db->get('bahan_baku')->result();
	}

	public function insert($data){
		return $this->db->insert('bahan_baku', $data);
	}

	public function add($id, $amount){
		$this->db->set('stok', 'stok + '.$amount, false)
				 ->where('id', $id);
		return $this->db->update('bahan_baku');
	}
	public function sub($id, $amount){
		$this->db->set('stok', 'stok - '.$amount, false)
				 ->where('id', $id);
		return $this->db->update('bahan_baku');
	}

	public function getStock($id){
		$this->db->where('id', $id);
		return $this->db->get('bahan_baku')->result_array()[0]['stok'];
	}
}