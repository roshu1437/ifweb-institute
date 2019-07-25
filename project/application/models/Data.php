<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {
	function check_login(){
		if(!isset($this->session->admin)){
			redirect(base_url('admin-login'));
		}
	}
	function login(){
		// echo "<pre>";print_r($_POST);die('die');echo "</pre>";
		if(!empty($_POST['admin_email']) && !empty($_POST['admin_pass'])){
			$data_array=array(
				'email'=>$_POST['admin_email'],
				'pass'=>md5($_POST['admin_pass'])
			);
			$this->db->where($data_array);
			$get=$this->db->get('admin')->row();
			if($get){
				$this->session->set_userdata('admin',$get->name);
				redirect(base_url('admin'));
			}else{
				$this->session->set_flashdata('msg','Email and Password not match');
			}
		}else{
			$this->session->set_flashdata('msg','Please Fill All the Fields');
		}
	}

	function get_pending_user(){
		$this->db->where('active',0);
		$g=$this->db->get('user');
		return $g->num_rows();
	}

}	