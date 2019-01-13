<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Products_Model');
		$this->load->model('List_Product_Model');
		$this->session->set_userdata(array(
			'login_id'     => 1,
			'auth'     => "admin",
		));
		//$this->session->userdata('login_id')
	}

	public function index()
	{	
		$this->load->view('layout/header_admin');	
		if($result = $this->Products_Model->get_Products()){
			$data['listProducts'] =  $result;
			$this->load->view('admin/listproduct/index', $data);

		}else{
			$this->load->view('admin/products/index');
		}
		$this->load->view('layout/footer_admin');
	}

	public function product($product_id)
	{	
		$this->load->view('layout/header_admin');
		if($result = $this->List_Product_Model->get_ListProduct($product_id)){
			$data['listProductID'] =  $result;
			$this->load->view('admin/listproduct/product' ,$data);
		}else{
			$this->load->view('admin/listproduct/product');
		}
		$this->load->view('layout/footer_admin');
	}

	public function form_add($product_id)
	{
		$this->load->view('layout/header_admin');	
		if($result = $this->Products_Model->get_ProductID($product_id)){
			$data['listProductID'] =  $result;			
			$this->load->view('admin/listproduct/form_add' ,$data);	
		}

		$this->load->view('layout/footer_admin');
	}

	public function insert_product() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$product_id = $this->input->post('product_id');
			$qty = $this->Products_Model->get_quality($product_id);

			$data = array(
				'product_id' => $product_id,
				'quality' => $this->input->post('quality'),
				'user_id' =>$this->session->userdata('login_id'),
				'status' => 'increase'				
			);

			$sum = $qty[0]->product_quality + $this->input->post('quality');
			// echo($sum);

			$product = array(
				'product_quality' => $sum
			);

			if($result = $this->List_Product_Model->add_Product($data) && $update = $this->Products_Model->update_Product($product_id,$product)){
				redirect('admin/Products/index');
			}else{

			}
		}
	}

	public function form_withdraw($product_id)
	{
		$this->load->view('layout/header_admin');	
		if($result = $this->Products_Model->get_ProductID($product_id)){
			$data['listProductID'] =  $result;			
			$this->load->view('admin/listproduct/form_withdraw' ,$data);	
		}

		$this->load->view('layout/footer_admin');			
	}

	public function withdraw_product() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$product_id = $this->input->post('product_id');
			$qty = $this->Products_Model->get_quality($product_id);

			$data = array(
				'product_id' => $product_id,
				'quality' => $this->input->post('quality'),
				'user_id' =>$this->session->userdata('login_id'),
				'status' => 'withdraw'
			);

				$sum = $qty[0]->product_quality - $this->input->post('quality');
				// echo($sum);
				// $ck = $sum = $qty[0]->product_quality - $this->input->post('quality');
				// echo $ck
				if($ck = $sum = $qty[0]->product_quality - $this->input->post('quality') < 0)
				{
					var_dump(http_response_code(404));
				}else{
					// echo "Sum"+$sum;
					$sum = $qty[0]->product_quality - $this->input->post('quality');
					$product = array(
						'product_quality' => $sum
					);

					print_r($product);

					if($result = $this->List_Product_Model->add_Product($data) && $update = $this->Products_Model->update_Product($product_id,$product)){
						// redirect('admin/list_product/product/'.$product_id);
						redirect('admin/Products/index');

					}else{

					}
				}

		}
	}
}