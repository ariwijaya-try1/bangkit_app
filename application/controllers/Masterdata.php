<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Masterdata extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->library('ion_auth');
    }

    public function _example_output($output = null) {
        $this->load->view('v_top', (array) $output);
        $this->load->view('v_gc', (array) $output);
        $this->load->view('v_bottom');
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function jabatan() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } $crud = new grocery_CRUD();
        $crud->set_table('jabatan');
        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Jabatan";
        $data['menu_active'] = "jabatan";
        $data['grup_menu_active'] = "masterdata";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function identitas() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $crud = new grocery_CRUD();
        $crud->set_table('identitas');
        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Identitas";
        $data['menu_active'] = "identitas";
        $data['grup_menu_active'] = "masterdata";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function mapel() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        
        $crud = new grocery_CRUD();
        $crud->set_table('mapel');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Mapel";
        $data['menu_active'] = "mapel";
        $data['grup_menu_active'] = "masterdata";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function kelas() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        
        $crud = new grocery_CRUD();
        $crud->set_table('kelas');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Kelas";
        $data['menu_active'] = "kelas";
        $data['grup_menu_active'] = "masterdata";
        $output->data = $data;
        $this->_example_output($output);
    }

}
