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
				return true;
				$this->session->set_userdata('msg','PLease Verified Your Email For Login');
			}else{
				$this->session->set_userdata('msg','Pease Try Again');
				return false;
			}
		}else{
			$msg="PLease Fill All the Fields";
			$this->session->set_flashdata('msg',$msg);
		}
	}
	function user_login(){
		if(!empty($_POST['login_email']) && !empty($_POST['login_pass'])){
			$data_array=array(
				'user_email'=>$_POST['login_email'],
				'password'=>$_POST['login_pass']
			);
			$this->db->where($data_array);
			$get=$this->db->get('user')->row();
			if($get){
				if($get->active == 1){
					$this->session->set_userdata('login',$get->id);
				}else{
					$this->session->set_flashdata('msg','Your Account is not active');
				}
			}else{
				$this->session->set_flashdata('msg','Email and Password not match');
			}
		}else{
			$this->session->set_flashdata('msg','Please Fill All the Fields');
		}
	}
	function pro_add(){
		if(!empty($_POST['pro_title']) && !empty($_POST['pro_price']) && !empty($_FILES['pro_img']['name'])){
			$data_array = array(
				'pro_title'=>$_POST['pro_title'],
				'pro_brand'=>$_POST['pro_brand'],
				'pro_qty'=>$_POST['pro_qty'],
				'pro_price'=>$_POST['pro_price'],
				'pro_user'=>$this->session->login,
				'pro_cat'=>$_POST['pro_cat'],
				'pro_desc'=>$_POST['pro_desc']
			);
			$data_array['pro_img']='';
			foreach($_FILES['pro_img']['name'] as $k => $v){
				$name=time().$_FILES['pro_img']['name'][$k];
				$temp_name=$_FILES['pro_img']['tmp_name'][$k];
				$move=move_uploaded_file($temp_name,'product/'.$name);
				if($move){
					$data_array['pro_img'].=$name.'@';
				}
			}
			$ins=$this->db->insert('product',$data_array);
			if($ins){
				msg('add');
				redirect(base_url('add_product'));
			}else{
				msg('ta');
				return false;
			}
		}else{
			msg('ae');
			return false;
		}
	}
	function get_cat(){
		$this->db->where('cat_status','1');
		$g=$this->db->get('category')->result();
		return $g;
	}
}