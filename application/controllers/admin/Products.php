<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Products_Model');
		$this->load->view('layout/header_admin');
	}

	public function index()
	{	
		if($result = $this->Products_Model->get_Products()){
			$data['listProducts'] =  $result;
			//print_r($result);
			$this->load->view('admin/products/index2', $data);
			
		}else{
			$data['listProducts'] =  "";
			//$this->load->view('layout/header');
			$this->load->view('admin/products/index', $data);
			//$this->load->view('layout/footer');
		}$this->load->view('layout/footer_admin');
	}
	public function form_add()
	{
		$Cate = $this->Products_Model->get_Cate();
		$data['Cate'] =  $Cate;
		$this->load->view('layout/header_admin');
		$this->load->view('admin/products/form_add', $data);
		$this->load->view('layout/footer_admin');
	
	}	

	public function insert_product() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{

			$type_file = explode("/",$_FILES['img']['type']);

			if($type_file['1']=="jpg" or $type_file['1']=="png" or $type_file['1']=="jpeg"){
				$config['upload_path']          = './assets/images/products';
		        $config['allowed_types']        = 'jpg|png|jpeg';
		        $config['max_size']             = 2048;
		        $config['max_width']            = 2048;
		        $config['max_height']           = 2048;
				$config['file_name']           = "products".date("Ymd_His").'.'.$type_file['1'];

		        $this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('img'))
		        {
		            $error = array('error' => $this->upload->display_errors());
		            // $this->load->view('test/upload_form', $error);
		        }
		        else
		        {
		            $data = array('upload_data' => $this->upload->data());
		            $config['image_library'] = 'gd2';
					$config['source_image'] = $data['upload_data']['full_path'];
					$config['create_thumb'] = False;
					$config['maintain_ratio'] = False;
					$config['width']         = 600;
					$config['height']       = 600;

					$this->load->library('image_lib', $config);

					if ( ! $this->image_lib->resize())
					{
					    echo $this->image_lib->display_errors();
					}
		        }

				$data = array(
					'product_name' => $this->input->post('name'),
					'product_title' => $this->input->post('title'),
					'product_detail' => $this->input->post('detail'),
					'product_size' => $this->input->post('size'),
					'product_price' => $this->input->post('price'),
					'cate_id' => $this->input->post('cate'),
					'product_img' => $config['file_name']
			);

				if($result = $this->Products_Model->add_Product($data)){
					redirect('admin/products');
				}
				else{
					redirect('admin/products/form_add');
				}
			}else{
				redirect('admin/products/form_add');
			}	

		}
	}

	public function form_edit($product_id)
	{
		$Cate = $this->Products_Model->get_Cate();
		$datacate['Cate'] =  $Cate;
		if($result = $this->Products_Model->get_ProductID($product_id)){
			$data['listProductID'] =  $result;
			$index_data = array_merge($datacate,$data);

			$this->load->view('layout/header_admin');
			$this->load->view('admin/products/form_edit' ,$index_data);
			$this->load->view('layout/footer_admin');
		}else{

		}
	
	}

	public function update_product()
	{
		if($this->input->server('REQUEST_METHOD') == "POST"){
			if(!empty($_FILES['img']['type']))
			{
				$type_file = explode("/",$_FILES['img']['type']);

				if(!$type_file['1']=="" and $type_file['1']=="jpg" or $type_file['1']=="png" or $type_file['1']=="jpeg"){
					$config['upload_path']          = './assets/images/products';
			        $config['allowed_types']        = 'jpg|png|jpeg';
			        $config['max_size']             = 2048;
			        $config['max_width']            = 2048;
			        $config['max_height']           = 2048;
			        $config['file_name']           = "products".date("Ymd_His").'.'.$type_file['1'];

			        $this->load->library('upload', $config);

					if ( ! $this->upload->do_upload('img'))
			        {
			            $error = array('error' => $this->upload->display_errors());
			        }
			        else
			        {
			            $data = array('upload_data' => $this->upload->data());

			            $config['image_library'] = 'gd2';
						$config['source_image'] = $data['upload_data']['full_path'];
						$config['create_thumb'] = False;
						$config['maintain_ratio'] = False;
						$config['width']         = 600;
						$config['height']       = 600;

						$this->load->library('image_lib', $config);

						if ( ! $this->image_lib->resize())
						{
						    echo $this->image_lib->display_errors();
						}else{
							unlink("./assets/images/products/".$this->input->post('image'));
							$data = array(
								'product_name' => $this->input->post('name'),
								'product_title' => $this->input->post('title'),
								'product_detail' => $this->input->post('detail'),
								'product_size' => $this->input->post('size'),
								'product_price' => $this->input->post('price'),
								'cate_id' => $this->input->post('cate'),
								'product_img' => $config['file_name']
							);
						}
			        }
			    }else{
					redirect('admin/products/edit/'.$this->input->post('product_id'));
			    }    

		    }else{
					$data = array(
						'product_name' => $this->input->post('name'),
						'product_title' => $this->input->post('title'),
						'product_detail' => $this->input->post('detail'),
						'product_size' => $this->input->post('size'),
						'product_price' => $this->input->post('price'),
						'cate_id' => $this->input->post('cate'),
					);
		    }

				if($result = $this->Products_Model->update_Products($this->input->post('product_id'),$data)){
					// redirect('admin/products/edit/'.$this->input->post('product_id'));
					redirect('admin/products');
				}
				else{
					redirect('admin/products/article/edit/'.$this->input->post('product_id'));
				}
				
		}
	}

	public function delete_product($product_id,$img) 
	{
		if(!empty($product_id)){
			if($result = $this->Products_Model->delete_ProductID($product_id)){
				unlink("./assets/images/products/".$img);
				redirect('admin/products');

			}else{
				redirect('admin/products');
			}
		}
	}		
}