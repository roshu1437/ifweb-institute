<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {
	function check_login(){
		if(!isset($this->session->admin)){
			redirect(base_url('admin-login'));
		}
	}
	function login(){
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
	function get_user(){
		$g=$this->db->get('user');
		return $g->result_array();
	}
	function user_active(){
		$data_array = array('active' =>1);
		$this->db->where('id',$_GET['ac']);
		$this->db->update('user',$data_array);
		redirect('admin/user');
	}
	function user_deactive(){
		$data_array = array('active' =>0);
		$this->db->where('id',$_GET['dac']);
		$this->db->update('user',$data_array);
		redirect('admin/user');
	}
	function add_cat(){
		if(!empty($_POST['cat_name'])){
			$n=$_POST['cat_name'];
			$this->db->where('cat_name',$n);
			$g=$this->db->get('category');
			if($g->num_rows() > 0){
				msg('already');
				return false;
			}
			$data_array=array('cat_name'=>$n);
			$ins=$this->db->insert('category',$data_array);
			if($ins){
				msg('add');
			}else{
				msg('ta');
			}
		}else{
			msg('ae');
		}
	}

}	