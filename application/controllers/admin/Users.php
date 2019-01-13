<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Users_Model');
	}

	public function index()
	{	
		// $this->load->view('layout/header_admin');
		// $this->load->view('admin/dashboard/index');
		// $this->load->view('layout/footer_admin');
		// $this->load->view('layout/header_admin');
		// $this->load->view('admin/users/index');
		// $this->load->view('layout/footer_admin');
		$this->load->view('layout/header_admin');
		if($result = $this->Users_Model->get_Users()){
			$data['listUsers'] =  $result;
			//print_r($result);
			
			$this->load->view('admin/employee/index', $data);
			
		}else{
			$data['listUsers'] =  "";
			$this->load->view('admin/employee/index');
		}
		$this->load->view('layout/footer_admin');

	}

	public function form_add()
	{
		$type = $this->Users_Model->get_type();
		$data['type'] =  $type;
		$this->load->view('layout/header_admin');
		$this->load->view('admin/employee/form_add', $data);
		$this->load->view('layout/footer_admin');
	}	

	public function insert_user() 
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$pass = md5($this->input->post('password'));

			$data = array(
				'name' => $this->input->post('name'),
				'lastname' => $this->input->post('lastname'),				
				'email' => $this->input->post('email'),
				'password' => $pass,
				'tel' => $this->input->post('tel'),
				'address' => $this->input->post('address'),
				'salary' => $this->input->post('salary'),
				'type_id' => $this->input->post('typeuser')
			);

			if($result = $this->Users_Model->add_User($data)){
				redirect('admin/users');
			}else{

			}
		}
	}

	public function form_edit($user_id)
	{
		$this->load->view('layout/header_admin');
		$type = $this->Users_Model->get_type();
		$datatype['type'] =  $type;
		if($result = $this->Users_Model->get_UserID($user_id)){
			$data['listUserID'] =  $result;
			$index_data = array_merge($datatype,$data);
			// print_r($data);
			$this->load->view('admin/employee/form_edit' ,$index_data);
		}else{
			$this->load->view('admin/employee/form_edit' ,$index_data);
		}
		$this->load->view('layout/footer_admin');

	}

	public function update_user()
	{
		if($this->input->server('REQUEST_METHOD') == "POST"){
			$id = $this->input->post('user_id');
			// $pass = md5($this->input->post('password'));
			$data = array(
				'name' => $this->input->post('name'),
				'lastname' => $this->input->post('lastname'),				
				'email' => $this->input->post('email'),				
				// 'password' => $this->input->post('password'),
				'type_id' => $this->input->post('typeuser')
						);
			print_r($data);			
			if($result = $this->Users_Model->update_User($id,$data)){
				$this->session->set_flashdata('message_update_permision','อัพเดท permision สำเร็จ');
				redirect('admin/Users/index');
			}
			else{
				$this->session->set_flashdata('message_update_permision','อัพเดท permision ไม่สำเร็จ');
				redirect('admin/Users/index');
			}
		}

	}

	public function delete_user($userid) 
	{
		// echo "MODEL DELETE USER INSERT #ADMIN";
		if(!empty($userid)){
			if($result = $this->Users_Model->delete_UserID($userid)){
				// $this->session->set_flashdata('message_delete_user','ลบ User สำเร็จ');
				redirect('admin/users');

			}else{
				// $this->session->set_flashdata('message_delete_user','ลบ User ไม่สำเร็จ');
				redirect('admin/users');
			}
		}
	}	
}