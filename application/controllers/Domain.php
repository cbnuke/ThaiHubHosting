<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Domain extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'm_template' );
		$this->load->library ( 'form_validation' );
		$this->m_template->set_Title('Domain name packages โดเมนเนมแพ็คเกจ');
	}
	public function index() {
		$data = array ();
		$this->m_template->set_Content ( 'hosting/main', $data );
		$this->m_template->showTemplate ();
	}
}

/* End of file domain.php */
/* Location: ./application/controllers/domain.php */