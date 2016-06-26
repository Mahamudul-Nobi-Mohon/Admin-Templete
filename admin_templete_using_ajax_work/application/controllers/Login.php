<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('person_model','person');
		
	}

	public function index(){
            //$this->load->model('Products_model');
            
             //$this->load->view('login-page');
		       $this->load->view('login-page');
            
      }

	public function user_login_data_check(){
		$this->form_validation->set_rules('name','User Name','trim|xss_clean|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|xss_clean');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('login-page');
		}

		else{
			$result=$this->Login_model->user_login_data_check();
			if($result){
				redirect('Person');
				}
			else{
				 $data['errorLogin'] ='Email or Password is Invalid.';
				 $this->load->view('login-page',$data);
			}
		}

	}

	public function logout(){
		$this->session->unset_userdata('current_user_id');
		$this->session->unset_userdata('current_user_name');
		$this->session->sess_destroy();
		redirect('Login/?logout=success');

	}

	
}
