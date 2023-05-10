<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Umat extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null) {
        $this->load->view('umat_view.php', (array) $output);
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function umat_management() {
                $crud = new grocery_CRUD();
 
        $crud->set_table('masterumat');
//        $crud->columns('NAMA','NAMABUDDHIS');
//        $crud->display_as('NAMA', 'Nama')
//        ->display_as('NAMABUDDHIS', 'Nama Buddhis');
//        $crud->change_field_type('HUKUM', 'true_false');
        $crud->field_type('HUKUM','enum',array('TRUE','FALSE'));
        
        
        $output = $crud->render();
 
        $this->_example_output($output);  
    }

    public function customers_management() {
        $crud = new grocery_CRUD();

        $crud->set_table('customers');
        $crud->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'salesRepEmployeeNumber', 'creditLimit');
        $crud->display_as('salesRepEmployeeNumber', 'from Employeer')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');
        $crud->set_subject('Customer');
        $crud->set_relation('salesRepEmployeeNumber', 'employees', 'lastName');

        $output = $crud->render();

        $this->_example_output($output);
    }

}
