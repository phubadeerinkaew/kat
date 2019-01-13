<?php
class Users_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function fetch_user_login($email,$password)
	{
		$pass = md5($password);
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		$query = $this->db->get('users');
		return $query->row();
	}

	public function record_count($email,$password)
	{
		$pass = md5($password);
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		return $this->db->count_all_results('users');
	}

	public function get_Users()
	{
		$this->db->select('users.*,type_user.type_name');
		$this->db->from("users");
		$this->db->join('type_user', 'users.type_id = type_user.type_id', 'left');
		$query=$this->db->get();
		return $query->result();
	}

	public function add_User($data)
	{
		$query = $this->db->insert('users',$data);
		return $query;
	}

	public function get_UserID($id)
	{
		$this->db->where('user_id',$id);;
		$query = $this->db->get('users');
		return $query->result();
	}

	public function update_User($id,$data)
	{
		$this->db->where('user_id',$id);;
		$result = $this->db->update('users',$data);
		return $result;
	}

	public function delete_UserID($id)
	{
		$this->db->where('user_id', $id);
		$result = $this->db->delete('users');
		return $result;
	}

	public function forgot_password($email)
	{
		$this->db->select('email,password,username');
		$this->db->where('email',$email);;
		$query = $this->db->get('users');
		return $query->result();
	}

	public function get_type()
	{
		$query=$this->db->get('type_user');
		return $query->result();
	}

	public function add_type_user($data)
	{
		$query = $this->db->insert('type_user',$data);
		return $query;
	}
}