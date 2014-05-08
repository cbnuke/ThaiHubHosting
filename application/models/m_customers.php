<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class m_customers extends CI_Model{

	function insert_customer($data){
		try {
			$this->db->insert('customers',$data);
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	function search($in){
		try {
			$this->db->select('*');
			$this->db->from('customers');
			$this->db->like('c_name',$in);
			$query = $this->db->get ();
			$result = $query->result_array ();
			return $result;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	function detail($in){
		try {
			$this->db->select('*');
			$this->db->from('customers');
			$this->db->where('c_id',$in);
			$query = $this->db->get ();
			$result = $query->result_array ();
			return $result;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	function set_form_search(){
		$i_name = array(
				'name' => 'name',
				'maxlength' => '255',
				'value'=>set_value('name'),
				'class' => 'input-block-leve',
				'placeholder' => 'ชื่อ - นามสกุล'
		);
		$all_form = array();
		$all_form=array(
				'name' => form_input($i_name),
		);
		return $all_form;
	}

	function set_validation_search(){
		$this->form_validation->set_rules('name', 'Customer name', 'trim|required|xss_clean');
		return TRUE;
	}

	function get_post_search(){
		$get_page_data=array(
				'name' =>$this ->input->post('name'),
		);
		return $get_page_data;
	}
	
	function set_form_add(){
		$i_pid = array(
				'name' => 'c_pid',
				'maxlength' => '13',
				'value'=>set_value('c_pid'),
				'class' => 'input-medium',
				'placeholder' => 'เช่น 1369900182XXX'
		);
		$i_name = array(
				'name' => 'c_name',
				'maxlength' => '255',
				'value'=>set_value('c_name'),
				'class' => 'input-large',
				'placeholder' => 'เช่น นายสมมุติ ทดสอบ'
		);
		$i_address = array(
				'name' => 'c_addr',
				'maxlength' => '255',
				'rows' => '2',
				'value'=>set_value('c_addr'),
				'class' => 'input-large',
				'placeholder' => 'ที่อยู่ทีสามารถติดต่อได้'
		);
		$i_tel = array(
				'name' => 'c_tel',
				'maxlength' => '255',
				'value'=>set_value('c_tel'),
				'class' => 'input-medium',
				'placeholder' => 'เช่น 0XX-XXX-XXXX'
		);
		$i_birth = array(
				'name' => 'c_birth',
				'id' => 'c_birth',
				'maxlength' => '10',
				'value'=>set_value('c_birth'),
				'class' => 'input-medium',
				'placeholder' => 'DD/MM/YYYY'
		);
		$i_job = array(
				'name' => 'c_job',
				'maxlength' => '255',
				'rows' => '2',
				'value'=>set_value('c_job'),
				'class' => 'input-large',
				'placeholder' => 'เช่น รับราชการตำแหน่ง...'
		);
		$i_pic = array(
				'name' => 'c_pic',
				'class' => 'input-large',
				'type' => 'file'
		);
		$i_tsp = array(
				'name' => 'c_tsp',
				'class' => 'input-large',
				'type' => 'file'
		);
		$i_tshome = array(
				'name' => 'c_tshome',
				'class' => 'input-large',
				'type' => 'file'
		);
		$all_form = array();
		$all_form=array(
				'c_pid' => form_input($i_pid),
				'c_name' => form_input($i_name),
				'c_addr' => form_textarea($i_address),
				'c_job' => form_textarea($i_job),
				'c_tel' => form_input($i_tel),
				'c_birth' => form_input($i_birth),
				'c_pic' => form_input($i_pic),
				'c_tsp' => form_input($i_tsp),
				'c_tshome' => form_input($i_tshome),
		);
		return $all_form;
	}
	function set_validation_add(){
		$this->form_validation->set_rules('c_pid', 'People ID', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_name', 'Customer name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_addr', 'Customer address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_job', 'Customer job', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_tel', 'Customer telephone', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_birth', 'Customer birthday', 'trim|required|xss_clean');
		$this->form_validation->set_rules('c_pic', 'Customer picture', 'trim|xss_clean');
		$this->form_validation->set_rules('c_tsp', 'People ID picture', 'trim|xss_clean');
		$this->form_validation->set_rules('c_tshome', 'Address picture', 'trim|xss_clean');
		return TRUE;
	}
	function get_post_add(){
		$get_page_data=array(
				'c_pid' =>$this ->input->post('c_pid'),
				'c_name' =>$this ->input->post('c_name'),
				'c_addr' =>$this ->input->post('c_addr'),
				'c_job' =>$this ->input->post('c_job'),
				'c_tel' =>$this ->input->post('c_tel'),
				'c_birth' =>$this ->input->post('c_birth'),
		);
		return $get_page_data;
	}
	function set_form_edit($data){
		$i_pid = array(
				'name' => 'c_pid',
				'maxlength' => '13',
				'value'=>(set_value('c_pid')==NULL)?$data['c_pid']:set_value('c_pid'),
				'class' => 'input-medium',
				'placeholder' => 'เช่น 1369900182XXX'
		);
		$i_name = array(
				'name' => 'c_name',
				'maxlength' => '255',
				'value'=>(set_value('c_name')==NULL)?$data['c_name']:set_value('c_name'),
				'class' => 'input-large',
				'placeholder' => 'เช่น นายสมมุติ ทดสอบ'
		);
		$i_address = array(
				'name' => 'c_addr',
				'maxlength' => '255',
				'rows' => '2',
				'value'=>(set_value('c_addr')==NULL)?$data['c_addr']:set_value('c_addr'),
				'class' => 'input-large',
				'placeholder' => 'ที่อยู่ทีสามารถติดต่อได้'
		);
		$i_tel = array(
				'name' => 'c_tel',
				'maxlength' => '255',
				'value'=>(set_value('c_tel')==NULL)?$data['c_tel']:set_value('c_tel'),
				'class' => 'input-medium',
				'placeholder' => 'เช่น 0XX-XXX-XXXX'
		);
		$i_birth = array(
				'name' => 'c_birth',
				'id' => 'c_birth',
				'maxlength' => '10',
				'value'=>(set_value('c_birth')==NULL)?$data['c_birth']:set_value('c_birth'),
				'class' => 'input-medium',
				'placeholder' => 'DD/MM/YYYY'
		);
		$i_job = array(
				'name' => 'c_job',
				'maxlength' => '255',
				'rows' => '2',
				'value'=>(set_value('c_job')==NULL)?$data['c_job']:set_value('c_job'),
				'class' => 'input-large',
				'placeholder' => 'เช่น รับราชการตำแหน่ง...'
		);
		$i_pic = array(
				'name' => 'c_pic',
				'class' => 'input-large',
				'type' => 'file'
		);
		$i_tsp = array(
				'name' => 'c_tsp',
				'class' => 'input-large',
				'type' => 'file'
		);
		$i_tshome = array(
				'name' => 'c_tshome',
				'class' => 'input-large',
				'type' => 'file'
		);
		$all_form = array();
		$all_form=array(
				'c_pid' => form_input($i_pid),
				'c_name' => form_input($i_name),
				'c_addr' => form_textarea($i_address),
				'c_job' => form_textarea($i_job),
				'c_tel' => form_input($i_tel),
				'c_birth' => form_input($i_birth),
				'c_pic' => form_input($i_pic),
				'c_tsp' => form_input($i_tsp),
				'c_tshome' => form_input($i_tshome),
		);
		return $all_form;
	}
}