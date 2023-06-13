<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->library('ion_auth');
    }

    public function index() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
        $data['page_title'] = "DASHBOARD";
        $data['menu_active'] = "dashboard";
        $data['grup_menu_active'] = "dashboard";
        $datasend = array(
            'data' => $data,
            'css_files' => 'array()',
            'message' => 'My Message'
        );

        $this->load->view('v_top', $datasend);
        $this->load->view('v_non_gc', $datasend);
        $this->load->view('v_bottom', $datasend);
    }

}
