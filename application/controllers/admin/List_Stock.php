<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Stock extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Stock_Model');
		$this->load->model('List_Stock_Model');
		$this->session->set_userdata(array(
			'login_id'     => 1,
			'auth'     => "admin",
		));
		//$this->session->userdata('login_id')
	}

	public function index()
	{	
		$this->load->view('layout/header_admin');	
		if($result = $this->Stock_Model->get_Stock()){
			$data['listStock'] =  $result;
			$this->load->view('admin/liststock/index', $data);

		}else{
			$this->load->view('admin/stock/index');
		}
		$this->load->view('layout/footer_admin');
	}

	public function stock($stock_id)
	{	
		$this->load->view('layout/header_admin');
		if($result = $this->List_Stock_Model->get_ListStock($stock_id)){
			$data['listStockID'] =  $result;
			$this->load->view('admin/liststock/stock' ,$data);
		}else{
			$this->load->view('admin/liststock/stock');
		}
		$this->load->view('layout/footer_admin');
	}

	public function form_add($stock_id)
	{
		$this->load->view('layout/header_admin');	
		if($result = $this->Stock_Model->get_StockID($stock_id)){
			$data['listStockID'] =  $result;			
			$this->load->view('admin/liststock/form_add' ,$data);	
		}

		$this->load->view('layout/footer_admin');
	}

	public function insert_stock() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$stock_id = $this->input->post('stock_id');
			$qty = $this->Stock_Model->get_quality($stock_id);

			$data = array(
				'stock_id' => $stock_id,
				'quality' => $this->input->post('quality'),
				'user_id' =>$this->session->userdata('login_id'),
				'ven_id' => $this->input->post('ven_id'),
				'status' => 'increase'				
			);

			$sum = $qty[0]->stock_qty + $this->input->post('quality');
			// echo($sum);

			$stock = array(
				'stock_qty' => $sum
			);

			if($result = $this->List_Stock_Model->add_Stock($data) && $update = $this->Stock_Model->update_Stock($stock_id,$stock)){
				redirect('admin/list_stock/stock/'.$stock_id);
			}else{

			}
		}
	}

	public function form_withdraw($stock_id)
	{
		$this->load->view('layout/header_admin');	
		if($result = $this->Stock_Model->get_StockID($stock_id)){
			$data['listStockID'] =  $result;			
			$this->load->view('admin/liststock/form_withdraw' ,$data);	
		}

		$this->load->view('layout/footer_admin');			
	}

	public function withdraw_stock() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$stock_id = $this->input->post('stock_id');
			$qty = $this->Stock_Model->get_quality($stock_id);

			$data = array(
				'stock_id' => $stock_id,
				'quality' => $this->input->post('quality'),
				'user_id' =>$this->session->userdata('login_id'),
				'ven_id' => $this->input->post('ven_id'),				
				'status' => 'withdraw'
			);

				// $sum = $qty[0]->product_quality - $this->input->post('quality');
				// echo($sum);
				if($ck = $sum = $qty[0]->stock_qty - $this->input->post('quality') < 0)
				{
					var_dump(http_response_code(404));
				}else{
					$sum = $qty[0]->stock_qty - $this->input->post('quality');
					$stock = array(
						'stock_qty' => $sum
					);

					print_r($stock);

					if($result = $this->List_Stock_Model->add_Stock($data) && $update = $this->Stock_Model->update_Stock($stock_id,$stock)){
						redirect('admin/list_stock/stock/'.$stock_id);
					}else{

					}
				}

		}
	}
}