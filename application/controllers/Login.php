<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('landing_view');
	}

	public function loginView() {
		$this->load->view('login_view');
	}

	public function validate() {
		$input = array(
			'username' => $this->input->post("username"),
			'password' => $this->input->post("password")
		);

		$retVal = $this->Users_model->loginValidation($input);
		if ($retVal == 1) {
			$data = $this->Users_model->getUser($this->input->post("username"));
			if($data->type == 0) { // admin
				redirect("Login/successAdmin");
			}
			else if($data->type == 1) { // resto
				$newData = array(
					'user_id' => $data->user_id
					);
				$this->session->set_userdata($newData);
				$this->successResto();
			}
			else { // users
				redirect("Login/successUser");
			}
		} else {
			redirect("Login/loginFailed");
		}

	}

	public function successResto() {
		redirect("Restaurant/index");
	}

	

}
