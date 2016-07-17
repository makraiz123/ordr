<?php 
	class Users_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}

		// CRUD
		// public function create($input){
		// 	$input["password"] = $this->encryptPassword($input["password"]);
  //           $this->db->insert('users', $input);
  //           return $this->db->insert_id();
  //       }

        public function getUser($username) {
        	$query = $this->db->query("SELECT * FROM users WHERE username = '$username'");
            return $query->row();
        }

  //       public function readUsernameFromID($user_id) {
  //       	$query = $this->db->query("SELECT user_name FROM users WHERE user_id = $user_id");
  //           return $query->row();
  //       }

  //       public function update($input, $id){
  //           $this->db->where('user_id', $id);
  //          	$input["password"] = $this->encryptPassword($input["password"]);
  //           $this->db->update('users', $input);
  //           return $this->db->affected_rows();
  //       }

  //       public function delete($id) {
  //       	$query = $this->db->delete('users', array('user_id'=>$id));
  //           return $query;
  //       }

		// public function getStoreAccounts() {
		// 	$query = $this->db->query("SELECT * FROM users WHERE type = 0");
		// 	if($query->num_rows() > 0) {
		// 		return $query->result();
		// 	} else {
		// 		return NULL;
		// 	}	
		// }
		
		public function loginValidation($data) {
			$user = $data["username"];
			$pass = $data["password"];
			$query = $this->db->query("SELECT * FROM users WHERE username = '$user'");
			if($query->num_rows() > 0 ) {
				$ret = $query->result();
				if($pass == $ret[0]->password) {
					return 1; // login successful
				}
				else {
					return 0; // incorect password
				}
			}
			else {
				return -1; // invalid account
			}
		}

		
	}

?>