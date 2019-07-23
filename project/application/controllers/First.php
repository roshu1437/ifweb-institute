<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {
	public function index(){
		$data['page']='home';
		$data['title']='Home Page';
		$data['home']='active';
		$this->load->view('main',$data);
	}
	public function about(){
		$data['about']='active';
		$data['page']='about';
		$data['title']='Home Page';
		$this->load->view('main',$data);
	}
	public function detail(){
		$data['page']='detail';
		$data['title']='Product Detail Page';
		$this->load->view('main',$data);	
	}
	public function contact(){
		$data['contact']='active';
		$data['page']='contact';
		$data['title']='Home Page';
		$this->load->view('main',$data);
	}
	public function user(){
		$this->load->model('User');
		if(isset($_POST['signup_submit'])){
			$this->User->user_signup();
			redirect(base_url());
		}
		if(isset($_POST['login_submit'])){
			$this->User->user_login();
			redirect(base_url());
		}
	}
}
