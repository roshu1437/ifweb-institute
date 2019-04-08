<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('user');
		$data['user']=$this->user->get_user();
		if(isset($_POST['signup'])){
			$data['msg']=$this->signup();
		}if(isset($_POST['login'])){
			$data['msg']=$this->login();
		}
		$data['title']='its Home page';
		$data['page']='home';
		$data['home']='active';
		$this->load->view('main',$data);
	}
	public function about(){
		$data['title']='its About page';
		$data['page']='about';
		$data['about']='active';
		$this->load->view('files/header',$data);
		$this->load->view('files/about',$data);
		$this->load->view('files/footer',$data);
	}
	public function contact(){
		$data['title']='its contact page';
		$data['contact']='active';
		$data['page']='contact';
		$this->load->view('main',$data);
	}
	public function signup(){
		if(!empty($_POST['first_name'])){
			$this->load->model('user');
			$data=$this->user->signup();
			return $data;
		}
	}
	public function login(){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$this->load->model('user');
			$data=$this->user->login();
			return $data;
		}
	}
	public function verify_token(){
		$this->load->model('user');
		$this->user->verify_token('verify_token');
	}
}