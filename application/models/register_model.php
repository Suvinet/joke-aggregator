<?php

class Register_model extends CI_Model{
	

	  function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

public function insert_user($firstname,$lastname,$username,$email,$dated,$password){
	$this->load->database();

		$data = array(
			'firstname' => $firstname,
			'lastname' => $lastname,
			'username' => $username,
			'email' => $email,
			'join_date' => $dated,
			'password' => $password
			
		);
		if($this->db->insert('users', $data)){
			return true;
		}
		else{
			return false;
		}

		
		/*$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->dated = $dated;*/

	}
	public function sanitize($data){
		$data=trim($data);
		$data=htmlspecialchars($data);
		return $data;
	}
}