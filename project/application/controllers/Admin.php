<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('data');
    }

	public function index(){
		$this->data->check_login();
		$data['title']='Admin Home';
		$data['page']='home';
		$this->load->view('admin',$data);
	}
	public function login(){
		if(isset($this->session->admin)){
			redirect(base_url('admin'));
		}
		if(isset($_POST['admin_login'])){
			$c=$this->data->login();
		}		
		$data['title']='Admin Home';
		$data['page']='login';
		$this->load->view('admin',$data);
	}
	public function user(){
		$this->data->check_login();
		if(isset($_GET['ac'])){
			$this->data->user_active();
		}
		if(isset($_GET['dac'])){
			$this->data->user_deactive();
		}

		$data['users']=$this->data->get_user();
		$data['title']='Active user';
		$data['page']='user';
		$this->load->view('admin',$data);	
	}
}
