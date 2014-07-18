<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_template');
        $this->load->library('form_validation');

        //Initial language
        $site_lang = $this->session->userdata('site_lang');
        if ($site_lang) {
            $this->lang->load('theme', $this->session->userdata('site_lang'));
            $this->language = $this->session->userdata('site_lang');
        } else {
            $this->lang->load('theme', 'thai');
            $this->language = 'thai';
        }
    }

    public function index() {
        $data = array();
        $this->m_template->set_Content('home/main', $data);
        $this->m_template->showTemplate();
    }

    public function test() {
        $data = array();
        $this->m_template->set_Content('home/main', $data);
        $this->m_template->showTemplate();
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */