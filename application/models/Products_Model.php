<?php
class Products_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_Products()
	{
		$this->db->select('products.*,categories.cate_name');
		$this->db->from("products");
		$this->db->join('categories', 'products.cate_id = categories.cate_id', 'left');
		$query=$this->db->get();
		return $query->result();
	}

	public function add_Product($data)
	{
		$query = $this->db->insert('products',$data);
		return $query;
	}

	public function get_ProductID($id)
	{
		$this->db->where('product_id',$id);;
		$query = $this->db->get('products');
		return $query->result();
	}

	public function update_Products($id,$data)
	{
		$this->db->where('Product_id',$id);;
		$result = $this->db->update('products',$data);
		return $result;
	}

	public function delete_ProductID($id)
	{
		$this->db->where('Product_id', $id);
		$result = $this->db->delete('products');
		return $result;
	}

	public function get_Cate()
	{
		$query=$this->db->get('categories');
		return $query->result();
	}

	public function update_Product($id,$data)
	{
		$this->db->where('Product_id',$id);
		$result = $this->db->update('products',$data);
		return $result;
	}	

	public function get_quality($id)
	{
		$this->db->select('product_quality');
		$this->db->where('product_id', $id);
		$query=$this->db->get('products');
		return $query->result();
	}	
}