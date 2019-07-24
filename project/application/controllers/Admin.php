<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		if(!isset($this->session->admin)){
			redirect(base_url('admin-login'));
		}
		$data['title']='Admin Home';
		$data['page']='home';
		$this->load->view('admin',$data);
	}
	public function login(){
		if(isset($_POST['admin_login'])){
			$this->load->model('data');
			$c=$this->data->login();
		}
		$data['title']='Admin Home';
		$data['page']='login';
		$this->load->view('admin',$data);
	}
}
