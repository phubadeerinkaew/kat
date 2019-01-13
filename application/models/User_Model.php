<?php
class User_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function fetch_user_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function record_count($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->count_all_results('users');
	}
}