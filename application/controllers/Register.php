<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
public $firstname;
		public $lastname;
		public $username;
		public $email;
		public $password;
		public $dated;
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('register');
	}
	public function signup()
	{
		$this->load->helper('form');
		$this->load->model('register_model');
		$this->load->helper('url');
		$this->load->helper('security');

		$this->firstname = $this->security->xss_clean($this->register_model->sanitize($_POST['firstname']));
		$this->lastname = $this->security->xss_clean($this->register_model->sanitize($_POST['lastname']));
		$this->username = $this->security->xss_clean($this->register_model->sanitize($_POST['username']));
		$this->email = $this->security->xss_clean($this->register_model->sanitize($_POST['email']));
		$this->password = password_hash($this->security->xss_clean($this->register_model->sanitize($_POST['password'])),PASSWORD_DEFAULT);
		$this->dated = date('Y-m-d H:i:s');
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

			redirect('register?er=2');
			 
		}
		else{
			if($this->register_model->insert_user($this->firstname,$this->lastname,$this->username,$this->email,$this->dated,$this->password)){
				redirect('login?su=0');

		}
		else{

			redirect('login?er=1');

		}
			

		}
		


	}
}
