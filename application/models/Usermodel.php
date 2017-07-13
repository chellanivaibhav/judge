<?php


class Usermodel extends CI_Model
{
	public function checklogin($email,$password)
	{
		$this->db->where(['email'=>$email,'password'=>$password]);
		$query = $this->db->get('user');
		$records = $query->result();
		return $records;
	}


}

?>