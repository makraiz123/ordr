<?php 
	class Restaurants_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}

		public function getRestaurant($userID) {
			$query = $this->db->query("SELECT * FROM users, restaurants WHERE restaurants.user_id = $userID AND restaurants.user_id = users.user_id");
            return $query->row();
		}

		public function getRestaurants() {
			$query = $this->db->query("SELECT * FROM users, restaurants WHERE restaurants.user_id = users.user_id AND users.type = 1");
			if($query->num_rows() > 0) {
				return $query->result();
			} else {
				return NULL;
			}	
		}

		
	}

?>