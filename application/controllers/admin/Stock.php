<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Stock_Model');
	}

	public function index()
	{	
		$this->load->view('layout/header_admin');
		if($result = $this->Stock_Model->get_Stock()){
			$data['listStock'] =  $result;

			$this->load->view('admin/stock/index2', $data);

		}else{
			$this->load->view('admin/stock/index');
		}
		$this->load->view('layout/footer_admin');		
	}
	
	public function form_add()
	{
		$this->load->view('layout/header_admin');
		$this->load->view('admin/stock/form_add');
		$this->load->view('layout/footer_admin');
	
	}	

	public function insert_stock() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$data = array(
				'stock_name' => $this->input->post('stock_name')
			);

				if($result = $this->Stock_Model->add_Stock($data)){
					redirect('admin/stock');
				}
				else{
					redirect('admin/stock/form_add');
				}
		}else{
			redirect('admin/stock/form_add');
		}	
	}

	public function form_edit($stock_id)
	{
		if($result = $this->Stock_Model->get_stockID($stock_id)){
			$data['liststockID'] =  $result;

			$this->load->view('layout/header_admin');
			$this->load->view('admin/stock/form_edit' ,$data);
			$this->load->view('layout/footer_admin');
		}else{

		}
	
	}

	public function update_stock()
	{
		if($this->input->server('REQUEST_METHOD') == "POST"){
		
					$data = array(
						'stock_name' => $this->input->post('stock_name')
					);
		    }

				if($result = $this->Stock_Model->update_stock($this->input->post('stock_id'),$data)){
					redirect('admin/stock/form_edit/'.$this->input->post('stock_id'));
				}
				else{
					redirect('admin/stock/form_edit/'.$this->input->post('stock_id'));
				}
	}

	public function delete_stock($stock_id) 
	{
		if(!empty($stock_id)){
			if($result = $this->Stock_Model->delete_stockID($stock_id)){
				redirect('admin/stock');
			}else{
				redirect('admin/stock');
			}
		}
	}		
}