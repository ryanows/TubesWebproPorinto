<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_pesanan extends CI_Model {
	
	public function getAll(){
		$this->db->select("pesanan.id, member.nama as nama_member, member.id as id_member, pesanan.tanggal, pesanan.jumlah, pesanan.ukuran, bahan_baku.nama as bahan_baku, pesanan.warna, pesanan.logo, tukang_jahit.nama as nama_tukang_jahit, pesanan.catatan, status.status")
				 ->from("pesanan")
				 ->join("member", "member.id = pesanan.id_member")
				 ->join("tukang_jahit", "tukang_jahit.id = pesanan.id_tukang_jahit")
				 ->join("bahan_baku", "bahan_baku.id = pesanan.id_bahan_baku")
				 ->join("status", "status.id = pesanan.status");
		return $this->db->get()->result_array();
	}

	public function getById($id){
		$this->db->select("pesanan.id, member.nama as nama_member, member.id as id_member, pesanan.tanggal, pesanan.jumlah, pesanan.ukuran, bahan_baku.nama as bahan_baku, pesanan.warna, pesanan.logo, tukang_jahit.nama as nama_tukang_jahit, pesanan.catatan, status.status, pesanan.front_x, pesanan.front_y, pesanan.front_size, pesanan.back_x, pesanan.back_y, pesanan.back_size, bahan_baku.id as id_bahan")
				 ->from("pesanan")
				 ->join("member", "member.id = pesanan.id_member")
				 ->join("tukang_jahit", "tukang_jahit.id = pesanan.id_tukang_jahit")
				 ->join("bahan_baku", "bahan_baku.id = pesanan.id_bahan_baku")
				 ->join("status", "status.id = pesanan.status")
				 ->where("pesanan.id", $id);
		return $this->db->get()->result_array();
	}

	public function getByMemberUsername($username){
		$this->db->select("pesanan.id, member.nama as nama_member, member.id as id_member, pesanan.tanggal, pesanan.jumlah, pesanan.ukuran, bahan_baku.nama as bahan_baku, pesanan.warna, pesanan.logo, tukang_jahit.nama as nama_tukang_jahit, pesanan.catatan, status.status")
				 ->from("pesanan")
				 ->join("member", "member.id = pesanan.id_member")
				 ->join("tukang_jahit", "tukang_jahit.id = pesanan.id_tukang_jahit")
				 ->join("bahan_baku", "bahan_baku.id = pesanan.id_bahan_baku")
				 ->join("status", "status.id = pesanan.status")
				 ->where("member.username", $username);
		return $this->db->get()->result_array();
	}

	public function getByTKUsername($username){
		$this->db->select("pesanan.id, member.nama as nama_member, member.id as id_member, pesanan.tanggal, pesanan.jumlah, pesanan.ukuran, bahan_baku.nama as bahan_baku, pesanan.warna, pesanan.logo, tukang_jahit.nama as nama_tukang_jahit, pesanan.catatan, status.status")
				 ->from("pesanan")
				 ->join("member", "member.id = pesanan.id_member")
				 ->join("tukang_jahit", "tukang_jahit.id = pesanan.id_tukang_jahit")
				 ->join("bahan_baku", "bahan_baku.id = pesanan.id_bahan_baku")
				 ->join("status", "status.id = pesanan.status")
				 ->where("tukang_jahit.username", $username);
		return $this->db->get()->result_array();
	}


	public function updateStatus($id, $status){
		$this->db->set('status', $status)
			     ->where('id', $id);
		return $this->db->update('pesanan');
	}

	public function insert($data){
		return $this->db->insert('pesanan', $data);
	}
}