<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		echo "welcom";
		die;

		// $this->load->view('welcome_message');
	}
	public function test(){
		echo "test";
		die;

		// $this->load->view('welcome_message');
	}
}
