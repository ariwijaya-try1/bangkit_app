<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

//        $this->load->library('grocery_CRUD');
    }

    public function index() {
        $this->load->view('dashboard1');
//        $this->load->view('home');
    }

}
