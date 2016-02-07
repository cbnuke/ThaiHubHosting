<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Terms extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'm_template' );
		$this->load->library ( 'form_validation' );
		$this->m_template->set_Title('Terms and Condition ข้อตกลงและเงื่อนไขการใช้บริการ');
	}
	public function index() {
		$data = array ();
		$this->m_template->set_Content ( 'terms/main', $data );
		$this->m_template->showTemplate ();
	}
}

/* End of file terms.php */
/* Location: ./application/controllers/terms.php */