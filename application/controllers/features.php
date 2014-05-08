<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Features extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'm_template' );
		$this->load->library ( 'form_validation' );
		$this->m_template->set_Title('Features คุณสมบัติของโฮสติ้ง');
	}
	public function index() {
		$data = array ();
		$this->m_template->set_Content ( 'features/main', $data );
		$this->m_template->showTemplate ();
	}
}

/* End of file features.php */
/* Location: ./application/controllers/features.php */