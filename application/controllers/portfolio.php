<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Portfolio extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'm_template' );
		$this->load->library ( 'form_validation' );
		$this->m_template->set_Title('Portfolio ผลงาน');
	}
	public function index() {
		$data = array ();
		$this->m_template->set_Content ( 'portfolio/main', $data );
		$this->m_template->showTemplate ();
	}
}

/* End of file portfolio.php */
/* Location: ./application/controllers/portfolio.php */