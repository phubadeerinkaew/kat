<?php
class List_Product_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_ListProduct($id)
	{
		$this->db->select('list_product.*,products.product_name,products.product_size,users.name,users.lastname');
		$this->db->from("list_product");
		$this->db->join('products', 'list_product.product_id = products.product_id', 'left');
		$this->db->join('users', 'list_product.user_id = users.user_id', 'left');
		$this->db->where('list_product.product_id', $id);		
		$this->db->order_by("list_product.create_time", "desc");	
		$query=$this->db->get();
		return $query->result();
	}	

	public function add_Product($data)
	{
		$query = $this->db->insert('list_product',$data);
		return $query;
	}

	public function get_ProductID($id)
	{
		$this->db->where('product_id',$id);;
		$query = $this->db->get('list_product');
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
}