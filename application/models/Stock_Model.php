<?php
class Stock_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_Stock()
	{
		$query=$this->db->get('stock');
		return $query->result();
	}

	public function add_Stock($data)
	{
		$query = $this->db->insert('stock',$data);
		return $query;
	}

	public function get_stockID($id)
	{
		$this->db->where('stock_id',$id);;
		$query = $this->db->get('stock');
		return $query->result();
	}

	public function update_stock($id,$data)
	{
		$this->db->where('stock_id',$id);;
		$result = $this->db->update('stock',$data);
		return $result;
	}

	public function delete_stockID($id)
	{
		$this->db->where('stock_id', $id);
		$result = $this->db->delete('stock');
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
		$this->db->select('stock_qty');
		$this->db->where('stock_id', $id);
		$query=$this->db->get('stock');
		return $query->result();
	}	
}