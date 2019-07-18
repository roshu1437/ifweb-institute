<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	function user_signup(){
		if(
			!empty($_POST['signup_fn']) &&
			!empty($_POST['signup_ln']) &&
			!empty($_POST['signup_email']) &&
			!empty($_POST['signup_pass']) &&
			!empty($_POST['signup_cpass'])
		){
			if($_POST['signup_pass']!=$_POST['signup_cpass']){
				$this->session->set_userdata('msg','Password Not Match');
				return false;
			}
			$this->db->where('user_email',$_POST['signup_email']);
			$check_email=$this->db->get('user')->num_rows();
			if($check_email > 0 ){
				$this->session->set_userdata('msg','This email already exist');
				return false;
			}
			$token=md5(time()).md5($_POST['signup_email']).md5($_POST['signup_fn']);
			$data_array=array(
				'first_name'=>$_POST['signup_fn'],
				'last_name'=>$_POST['signup_ln'],
				'user_email'=>$_POST['signup_email'],
				'password'=>$_POST['signup_pass'],
				'user_token'=>$token
			);
			$ins=$this->db->insert('user',$data_array);
			if($ins){
				$this->session->set_userdata('msg','PLease Verified Your Email For Login');
				return true;
			}else{
				$this->session->set_userdata('msg','Pease Try Again');
				return false;
			}
		}else{
			$msg="PLease Fill All the Fields";
			$this->session->set_userdata('msg',$msg);
		}
	}	
}	