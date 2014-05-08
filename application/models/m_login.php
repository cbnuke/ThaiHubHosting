<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class m_login extends CI_Model{

	function insert_register($data){
		try {
			$this->db->insert('register',$data);
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	function select_user($user,$pass){
		try {
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('u_id',$user);
			$this->db->where('u_pass',$pass);
			$query = $this->db->get ();
			$result = $query->result_array ();
			return $result;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	function set_form(){
		$i_username = array(
				'name' => 'username',
				'maxlength' => '20',
				'value'=>set_value('username'),
				'class' => 'input-block-level',
				'placeholder' => 'Username'
		);
		$i_password = array(
				'type' => 'password',
				'name' => 'password',
				'maxlength' => '32',
				'value'=>set_value('password'),
				'class' => 'input-block-level',
				'placeholder'=>'Password'
		);
		$all_form = array();
		$all_form=array(
				'username' => form_input($i_username),
				'password'=>form_input($i_password),
		);
		return $all_form;
	}

	function set_validation(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		return TRUE;
	}

	function get_post(){
		$get_page_data=array(
				'username' =>$this ->input->post('username'),
				'password'=>$this->input->post('password'),
		);
		return $get_page_data;
	}
}