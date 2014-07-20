<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class lang extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function thai($page = 'home') {
        $this->session->set_userdata('site_lang', "thai");
        $this->GoToCurrent($page);
    }

    public function english($page = 'home') {
        $this->session->set_userdata('site_lang', "english");
        $this->GoToCurrent($page);
    }

    private function GoToCurrent($page) {
        if ($page != NULL)
            redirect($page);
        else
            redirect(base_url());
    }

}
