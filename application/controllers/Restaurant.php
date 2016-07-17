<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Controller {

	public function index() {
		$userID = $this->session->userdata('user_id');
		$data["restaurant"] = $this->Restaurants_model->getRestaurant($userID);
		$this->load->view('restaurant_home_view', $data);
	}

	public function customerCheckInView() {
		$userID = $this->session->userdata('user_id');
		$data["restaurant"] = $this->Restaurants_model->getRestaurant($userID);
		$this->load->view('customer_check_in_view', $data);
	}

	public function checkInUser() {
		$userID = $this->input->post('username');
		$data = $this->Users_model->getUser($userID);
		header('Content-Type: application/json');
    	echo json_encode( $data );
	}

	public function restaurantsView() {
		$data["restaurants"] = $this->Restaurants_model->getRestaurants();
		$this->load->view('restaurants_view', $data);
	}

	

}
