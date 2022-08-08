<?php
class Model_admin extends CI_Model
{

	function semua($table) {
    return $this->db->get($table);
	}

	function tampil($table){
		return $this->db->get($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function edit_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function ambil($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}