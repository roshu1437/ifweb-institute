<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		// $test='ali';
		// $data = array('test' =>'ali');
		$data['page']='home';
		$data['t']='home page';
		$this->load->view('main',$data);
	}
	public function about(){
		$data['t']='about page';
		$data['page']='about';
		$this->load->view('main',$data);
	}
	public function contact(){
		$data['t']='contact page';
		$data['page']='contact';
		$this->load->view('main',$data);
	}
}
