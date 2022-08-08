<?php
class Model_page extends CI_Model
{
  function tampil($table){
		return $this->db->get($table);
	}
  
	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}

  function tambah($table,$data){
		$this->db->insert($table,$data);
	}

}