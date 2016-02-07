<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->library('form_validation');
        $this->m_template->set_Title('Contact ติดต่อเรา');
    }

    public function index() {
        $data = array();
        $this->m_template->set_Content('contact/main', $data);
        $this->m_template->showTemplate();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */