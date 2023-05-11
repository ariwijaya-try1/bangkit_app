<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null) {
        $this->load->view('dataumat.php', (array) $output);
    }

    public function master() {
        $this->load->view('master');
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function dashboard() {
        $this->load->view('dashboard');
    }

    public function dataumat() {
        $crud = new grocery_CRUD();
        $crud->set_table('customers')
                ->set_subject('Customer')
                ->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'creditLimit')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');
//         $crud->set_table_title('Customer Management');

        $crud->fields('customerName', 'contactLastName', 'phone', 'city', 'country', 'creditLimit');
        $crud->required_fields('customerName', 'contactLastName');

        $output = $crud->render();

        $this->_example_output($output);
    }



}
