<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('auth') == null && $this->session->userdata('auth') !== "SuperAdmin" && $this->session->userdata('auth') !== "Staff")
		// {
		// 	//console.log('no login');
		// 	redirect('login');
		// }
		$this->load->model('Users_Model');
		$this->session->set_userdata(array(
			'login_id'     => 1,
			'auth'     => "admin",
		));
	}

	public function index()
	{	
		$this->load->view('layout/header_admin');
		$type = $this->Users_Model->get_type();
		$datatype['type'] =  $type;
		if($result = $this->Users_Model->get_UserID($this->session->userdata('login_id'))){
			$data['listUserID'] =  $result;
			$index_data = array_merge($datatype,$data);
			$this->load->view('admin/profile/index' ,$index_data);
		}else{
			$this->load->view('admin/profile/index' ,$index_data);
		}
		$this->load->view('layout/footer_admin');

	}
	public function edit_profile(){
		$this->load->view('layout/header_admin');
		$this->load->view('admin/profile/edit_user');
		$this->load->view('layout/footer_admin');
		
	}

	public function update_profile()
	{
		// $this->load->view('layout/header_admin');
		// echo "MODEL UPDATE USER INSERT #ADMIN";
		if($this->input->server('REQUEST_METHOD') == "POST"){
			$id = $this->input->post('user_id');
			// $pass = md5($this->input->post('password'));
			$data = array(
				'name' => $this->input->post('name'),
				'lastname' => $this->input->post('lastname'),				
				'email' => $this->input->post('email'),				
				'password' => $this->input->post('password'),
				'tel' => $this->input->post('tel'),
				'address' => $this->input->post('address'),
				'type_id' => $this->input->post('typeuser')
						);
			if($result = $this->Users_Model->update_User($id,$data)){
				echo $id." ".$data;
				// $this->session->set_flashdata('message_update_permision','อัพเดท permision สำเร็จ');
				// redirect('admin/profile/index/'.$id);
			}
			else{
				// $this->session->set_flashdata('message_update_permision','อัพเดท permision ไม่สำเร็จ');
				// redirect('admin/profile/index/'.$id);
			}
		}
		// $this->load->view('layout/footer_admin');

	}

}