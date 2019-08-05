<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->model('user');
    }
	public function index(){
		$data['products']=$this->user->get_products()->result_array();
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
		if(isset($_POST['signup_submit'])){
			$this->user->user_signup();
			redirect(base_url());
		}
		if(isset($_POST['login_submit'])){
			$this->user->user_login();
			redirect(base_url());
		}
	}
	public function logout(){
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('admin');
		redirect(base_url());
	}
	public function add_product(){
		if(!isset($this->session->login)){
			redirect(base_url());
		}
		if(isset($_POST['pro_submit'])){
			$this->user->pro_add();
		}
		$data['categories']=$this->user->get_cat();
		$data['add_product']='active';
		$data['page']='add_product';
		$data['title']='Product Add Page';
		$this->load->view('main',$data);
	}
	public function product_detail(){
		if(!isset($this->session->login)){
			redirect(base_url());
		}
		if(!isset($_GET['product'])){
			redirect(base_url());
		}
		$data['product']=$this->user->product()->result_array()[0];
		$data['page']='detail';
		$data['title']='Product Detail';
		$this->load->view('main',$data);
	}
}
