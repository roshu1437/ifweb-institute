<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	function user_signup(){

		$this->db->select('first_name,id');
		$this->db->where('id',2);
		$g=$this->db->get('user')->result_array();
		echo "<pre>";print_r($g);die('die');echo "</pre>";
	}	
}	