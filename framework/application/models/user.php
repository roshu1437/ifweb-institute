<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model {
	function get_user(){
		//$user=$this->db->get('signup')->result(); // For All 
		$where=array('login_type'=>1,'first_name'=>'ali');
		$this->db->where($where);
		$user=$this->db->get('signup')->result(); // For 1
		return $user;
		// echo "<pre>";print_r($user);die('die');echo "</pre>";
	}
	function signup(){
		$check=true;
		$msg=array();
		$msg['error']='';
		$msg['done']='';
		foreach ($_POST as $index => $value) {
			if($index != 'last_name' ){
				if(empty($value)){
					$check=false;
				}
			}
		}
		if($check=='true'){
			if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
				$this->db->where('email_address',$_POST['email']);
				$c=$this->db->get('signup')->row();
				if($c){
					$msg['error']="This email is allready taken";
				}else{
					$token=md5($_POST['email'].time());
					$data_array = array(
						'first_name' => $_POST['first_name'], 
						'last_name' => $_POST['last_name'], 
						'email_address' => $_POST['email'], 
						'is_verified' => $token, 
						'login_pass' => md5($_POST['password']) 
					);
					if($this->db->insert('signup',$data_array)){
						$msg['done']=$token;
					}else{
						$msg['error']="Please try again";
					}
				}
			}else{
				$msg['error']="Email not valid";
			}
		}else{
			$msg['error']="please fill all the fields";
		}
		return $msg;
	}
	function verify_token(){
		if(!empty($_GET['token'])){
			$this->db->where('is_verified',$_GET['token']);
			if($this->db->get('signup')->row()){
				$data_array = array(
					'is_verified' => 0, 
					'is_active' => 1 
				);
				$this->db->where('is_verified',$_GET['token']);
				if($this->db->update('signup',$data_array)){
					echo "string";

				}else{
					echo "string222";
					
				}
			}else{
				redirect(base_url());	
			}
		}else{
			redirect(base_url());
		}
	}
	function login(){
		$msg=array();
		$msg['error']='';
		$msg['done']='';
		$data_array = array(
			'email_address' =>$_POST['email'],
			'login_pass'=>md5($_POST['password'])
		);
		$this->db->where($data_array);
		$user=$this->db->get('signup')->row();
		if($user){
			if($user->is_active==1){
				echo "login";
			}else{
				$msg['error']='please verify email first';
			}
		}else{
			$msg['error']='email and password not match';
		}
		return $msg;
	}
}
?>