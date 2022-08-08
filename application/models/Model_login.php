<?php
class Model_Login extends CI_Model
{

	/*cek login*/
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

}