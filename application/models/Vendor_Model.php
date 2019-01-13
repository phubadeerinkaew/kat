<?php
class Vendor_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_Vendors()
	{
		$query=$this->db->get('vendor');
		return $query->result();
	}

	public function add_Vendors($data)
	{
		$query = $this->db->insert('vendor',$data);
		return $query;
	}

	public function get_VenID($id)
	{
		$this->db->where('ven_id',$id);;
		$query = $this->db->get('vendor');
		return $query->result();
	}

	public function update_Vendor($id,$data)
	{
		$this->db->where('ven_id',$id);;
		$result = $this->db->update('vendor',$data);
		return $result;
	}

	public function delete_VenID($id)
	{
		$this->db->where('ven_id', $id);
		$result = $this->db->delete('vendor');
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