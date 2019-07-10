<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('test');
	}
	public function test(){
		$this->load->view('ali');
	}
	public function c1(){
		$this->load->view('asad');
	}
	public function faq(){
		$this->load->view('faq');
	}
}
