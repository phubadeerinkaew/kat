<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_Model');

	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function checklogin()
	{
		$user = $this->Users_Model->get_Users();
		print_r($user);
		if($this->input->server('REQUEST_METHOD') == "POST")
		{	
					echo $this->input->post('email');
		echo $this->input->post('password');
			echo $pass = md5($this->input->post('password'));
			// $pass = md5($this->input->post('password'));
			if($this->Users_Model->record_count($this->input->post('email'), $this->input->post('password')) == 1)
			{
				
				$result = $this->Users_Model->fetch_user_login($this->input->post('email'), $this->input->post('password'));

				$this->session->set_userdata(array(
					'login_id'     => $result->user_id,
					'display_name'     => $result->username,
					'auth'     => $result->type_id,
					));

				//echo $this->session->userdata('auth');
				if($this->session->userdata('auth') !== null && $this->session->userdata('auth') >= 2)
				{
					//redirect('admin/Dashboard');
					echo "login สำเร็จ";
				}else {
					//redirect('home');
					echo "login ไม่าำเร็จ";
				}

			}
			else{
				// $this->session->set_flashdata('message_login','email / password ผิด');
				//redirect('login');
				echo "login ผิด";
				echo $this->input->post('email');
				echo $this->input->post('password');
				$pass = md5($this->input->post('password'));
				echo $pass;
			}
				
		}
		else{
				// $this->session->set_flashdata('message_login','มีข้อผิดพลาดเกิดขึ้น');
				//redirect('login');
			echo "login ผิดพลาด";
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home', 'refresh');
	}

	public function register()
	{
		if($this->input->server('REQUEST_METHOD') == "POST")
		{
			$pass = md5($this->input->post('password'));

			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $pass
			);

			if($result = $this->Users_Model->addUser($data)){
				if($this->Users_Model->record_count($this->input->post('email'), $pass) == 1)
				{
				
					$result = $this->Users_Model->fetch_user_login($this->input->post('email'), $pass);

					$this->session->set_userdata(array(
						'login_id'     => $result->user_id,
						'display_name'     => $result->username,
						'auth'     => $result->type_name,
						));

					//echo $this->session->userdata('auth');
					if($this->session->userdata('auth') !== null && $this->session->userdata('auth')=="admin")
					{
						redirect('admin/Dashboard');
					}else {
						redirect('home');
					}

				}
				else{
					// $this->session->set_flashdata('message_login','email / password ผิด');
					// redirect('login');
				}
			}else{
				// $this->session->set_flashdata('message_addUser','addUser: error / ข้อมูลซ้ำ ');
				// redirect('login');
			}
		}
	}
}