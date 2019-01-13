<?php
class List_Stock_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_ListStock($id)
	{
		$this->db->select('list_stock.*,stock.stock_name,users.name,users.lastname,vendor.ven_name,vendor.ven_lastname');
		$this->db->from("list_stock");
		$this->db->join('stock', 'list_stock.ls_id = stock.stock_id', 'left');
		$this->db->join('users', 'list_stock.user_id = users.user_id', 'left');
		$this->db->join('vendor', 'list_stock.ven_id = vendor.ven_id', 'left');
		$this->db->where('list_stock.stock_id', $id);		
		$this->db->order_by("list_stock.create_time", "desc");	
		$query=$this->db->get();
		return $query->result();
	}	

	public function add_Stock($data)
	{
		$query = $this->db->insert('list_stock',$data);
		return $query;
	}

	public function get_StockID($id)
	{
		$this->db->where('stock_id',$id);;
		$query = $this->db->get('list_stock');
		return $query->result();
	}

	public function update_Stock($id,$data)
	{
		$this->db->where('stock_id',$id);
		$result = $this->db->update('stock',$data);
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