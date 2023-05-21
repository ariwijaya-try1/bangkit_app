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
        $this->load->view('v_top', (array) $output);
        $this->load->view('v_gc', (array) $output);
        $this->load->view('v_bottom');
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function masterumat() {
        $crud = new grocery_CRUD();

        $crud->set_table('masterumat')
                ->set_subject('Masterumat')
                ->columns('NOID', 'NAMA', 'TELEPON', 'ALAMAT', 'FOTO_DIR')
        //->display_as('customerName', 'Name')
        //->display_as('contactLastName', 'Last Name')
        ;
        $crud->add_fields('NAMA', 'NAMABUDDHIS', 'NAMA_DICETAK', 'TMPLAHIR', 'TGLLAHIR', 'JENISKEL', 'NOKTP',
                'GOL_DARAH', 'EDUCATION', 'MARITAL', 'ALAMAT', 'KOTA', 'TELEPON',
                'WA', 'IG', 'FB', 'PEKERJAAN', 'OFFICE', 'OFFICE_ADD', 'OFFICE_TEL',
                'HOBI',
                'PARITA', 'DAYAKA', 'SARAN');
        $crud->add_fields('NAMA', 'BADMINTON', 'TENIS');
        $crud->display_as('NAMA', 'NAMA')
//                ->display_as('BADMINTON', 'BADMINTON')
//                ->display_as('TENIS', '')
        ;

        $crud->field_type('SARAN', 'text');
        $crud->unset_texteditor('SARAN', 'full_text');

        //$crud->set_relation('officeCode','offices','city');//KHHHHH t_t
        $crud->field_type('JENISKEL', 'multiselect', array("Pria" => "Pria", "Wanita" => "Wanita"));
        $crud->field_type('GOL_DARAH', 'multiselect', array("O" => "O", "A" => "A", "B" => "B", "AB" => "AB"));
        $crud->field_type('MARITAL', 'multiselect', array("Belum Menikah" => "Belum Menikah", "Menikah" => "Menikah", "Duda/Janda" => "Duda/Janda"));
        $crud->field_type('EDUCATION', 'multiselect',
                array(
                    "SD" => "SD",
                    "SLTP" => "SLTP",
                    "SLTA" => "SLTA",
                    "D1" => "D1",
                    "D2" => "D2",
                    "D3" => "D3",
                    "S1" => "S1",
                    "S2" => "S2",
                    "S3" => "S3"
        ));

//        $crud->callback_field('HOBI', array($this, 'field_callback_HOBI'));
//        $crud->field_type('HOBI', 'enum', array('TRUE', 'FALSE'));
//        $crud->field_type('HUKUM', 'enum', array('TRUE', 'FALSE'));
//        $crud->callback_field('BADMINTON', array($this, 'field_callback_BADMINTON'));
//        $crud->callback_field('TENIS', array($this, 'field_callback_TENIS'));
        $crud->field_type('BADMINTON', 'multiselect',
                array("BADMINTON" => "TRUE", "TENIS" => "TRUE", "RENANG" => "TRUE"));

        $crud->callback_field('PEKERJAAN', array($this, 'field_callback_PEKERJAAN'));
        $crud->callback_field('PARITA', array($this, 'field_callback_PARITA'));
        $crud->callback_field('DAYAKA', array($this, 'field_callback_DAYAKA'));

        $output = $crud->render();
        //rending extra value to $output
        $data['page_title'] = "Masterumat";
        $data['menu_active'] = "masterumat";

        $output->data = $data;
        //var_dump($output);
        $this->_example_output($output);
    }

    function field_callback_PEKERJAAN($value = '', $primary_key = null) {
        return ' <input type="radio" name="PEKERJAAN" value="Pelajar" /> Pelajar <br>'
                . ' <input type="radio" name="PEKERJAAN" value="Mahasiswa" /> Mahasiswa <br>'
                . ' <input type="radio" name="PEKERJAAN" value="Karyawan" /> Karyawan <br>'
                . ' <input type="radio" name="PEKERJAAN" value="Wiraswasta" /> Wiraswasta <br>'
                . '';
    }

    function field_callback_BADMINTON($value = '', $primary_key = null) {
        return ' '
                . '<input type="checkbox" name="BADMINTON" value="TRUE"> Bulu Tangkis<br>'
                . '';
    }

    function field_callback_TENIS($value = '', $primary_key = null) {
        return ' '
                . '<input type="checkbox" name="TENIS" value="TRUE"> Tenis<br>'
                . '';
    }

    function field_callback_HOBI($value = '', $primary_key = null) {
        return ' '
                . '<input type="checkbox" name="BADMINTON" value="BADMINTON"> Bulu Tangkis<br>'
                . '<input type="checkbox" name="RENANG"> Renang<br>'
                . '<input type="checkbox" name="CATUR"> Catur<br>'
                . '<input type="checkbox" name="TENIS"> Tenis<br>'
                . '<input type="checkbox" name="BASKET"> Basket<br>'
                . '<input type="checkbox" name="VOLI"> Voli<br>'
                . '<input type="checkbox" name="AEROBIC"> Aerobik<br>'
                . '<input type="checkbox" name="TENISMEJA"> Tenis Meja<br>'
                . '';
    }

    function field_callback_PARITA($value = '', $primary_key = null) {
        return ' <input type="radio" name="PARITA" value="true" /> Ya <br>'
                . ' <input type="radio" name="PARITA" value="false" /> Tidak <br>'
                . '';
    }

    function field_callback_DAYAKA($value = '', $primary_key = null) {
        return ' <input type="radio" name="DAYAKA" value="true" /> Ya <br>'
                . ' <input type="radio" name="DAYAKA" value="false" /> Tidak <br>'
                . '';
    }

    function log_user_after_insert($post_array, $primary_key) {
        $user_logs_insert = array(
            "user_id" => $primary_key,
            "created" => date('Y-m-d H:i:s'),
            "last_update" => date('Y-m-d H:i:s')
        );

        $this->db->insert('user_logs', $user_logs_insert);

        return true;
    }

    public function customer() {
        $crud = new grocery_CRUD();
        $crud->set_table('customers')
                ->set_subject('Customer')
                ->columns('customerName', 'contactLastName', 'phone', 'city', 'country', 'creditLimit')
                ->display_as('customerName', 'Name')
                ->display_as('contactLastName', 'Last Name');

        $crud->fields('customerName', 'contactLastName', 'phone', 'city', 'country', 'creditLimit');
        $crud->required_fields('customerName', 'contactLastName');

        $output = $crud->render();
        //rending extra value to $output
        $data['page_title'] = "Customer";
        $data['menu_active'] = "customer";

        $output->data = $data;
        //var_dump($output);
        $this->_example_output($output);
    }

    public function front_end() {

        $data['page_title'] = "Customer";
        $data['menu_active'] = "customer";
        $this->load->view('front_end', $data);
    }

}
