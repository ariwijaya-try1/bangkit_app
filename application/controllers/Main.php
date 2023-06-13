<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

//    public function index() {
//        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
//    }

    public function personel() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
        $crud = new grocery_CRUD();
        $crud->set_table('personel');
        $crud->set_relation('id_identitas', 'identitas', 'nama_identitas');
        $crud->set_relation('id_jabatan', 'jabatan', 'nama_jabatan');
        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Personel";
        $data['menu_active'] = "personel";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function siswa() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->set_table('siswa');
        $crud->set_relation('id_wali', 'wali', 'nama_wali');
        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Siswa";
        $data['menu_active'] = "siswa";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function rombel() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->set_table('rombel');
        $crud->columns(
                'kode_rombel',
                'id_kelas',
                'tahun_ajaran',
                'id_personel'
        );
        $crud->fields(
                'kode_rombel',
                'id_kelas',
                'tahun_ajaran',
                'id_personel'
        );
        $crud->set_relation('id_kelas', 'kelas', 'nama_kelas');
        $crud->set_relation('id_personel', 'personel', 'nama_personel');

        $crud->field_type('semester', 'dropdown', array("1" => "1", "2" => "2"));

        $crud->add_action('Detail Rombel', '', 'main/detail_rombel', 'fbutton', '');

        $crud->display_as('kode_rombel', 'Kode Rrombongan Belajar')
                ->display_as('id_personel', 'Guru Kelas')
                ->display_as('id_kelas', 'Kelas');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Rombel";
        $data['menu_active'] = "rombel";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function detail_rombel() {
        $db = get_instance()->db->conn_id;
        $id_rombel = mysqli_real_escape_string($db, $this->uri->segment('3'));
        $this->db->select('*');
        $this->db->where('id_rombel', $id_rombel);
        $query = $this->db->get('rombel');
//        $result = $query->result();
        $result = $query->row();
//        print_r($result->kode_rombel) ;

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
//        $crud->set_table('detail_rombel');//arahkan ke nilai_siswa karena sama + nilai
        $crud->set_table('nilai_siswa');

        $crud->where([
            'nilai_siswa.id_rombel' => $id_rombel
        ]);
        $crud->columns(
                'id_siswa'
        );
        $crud->fields(
                'id_rombel',
                'id_siswa'
        );
        $crud->display_as('id_siswa', 'Siswa')
                ->display_as('id_rombel', 'kode_rombel'); //for view only
        $crud->set_relation('id_siswa', 'siswa', 'nama_siswa');

        $crud->field_type('id_rombel', 'hidden', $id_rombel);

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Detail Rombel " . $result->kode_rombel;
        $data['menu_active'] = "rombel";
        $data['go_back'] = '<br><a href="' . base_url('main') . '/rombel">
                                <button type="button" class="btn btn-primary">Kembali Ke Daftar Rombel</button>
                            </a>';
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    function field_callback_id_rombel($value = '', $primary_key = null) {
        return ' <input type="text" name="id_mapel_1" value="'
                . $this->uri->segment('3')
                . '"/> ';
    }

    public function wali() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->set_table('wali');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Wali";
        $data['menu_active'] = "wali";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function nilai() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->set_table('nilai');
        $crud->set_relation('id_siswa', 'siswa', 'nama_siswa');
        $crud->set_relation('id_mapel', 'mapel', 'nama_mapel');
        $crud->set_relation('id_personel', 'personel', 'nama_personel');
        $crud->fields('id_rombel', 'id_mapel', 'id_siswa', 'nilai', 'catatan', 'id_personel');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Nilai";
        $data['menu_active'] = "nilai";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function daftar_rombel() {
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->set_table('rombel');
        $crud->columns(
                'kode_rombel',
                'id_kelas',
                'tahun_ajaran',
                'id_personel'
        );
        $crud->fields(
                'kode_rombel',
                'id_kelas',
                'tahun_ajaran',
                'id_personel'
        );
        $crud->set_relation('id_kelas', 'kelas', 'nama_kelas');
        $crud->set_relation('id_personel', 'personel', 'nama_personel');

        $crud->field_type('semester', 'dropdown', array("1" => "1", "2" => "2"));

        $crud->add_action('Lihat Daftar Nilai', '', 'main/rombel_nilai', 'fbutton', '');

        $crud->display_as('kode_rombel', 'Kode Rrombongan Belajar')
                ->display_as('id_personel', 'Guru Kelas')
                ->display_as('id_kelas', 'Kelas');

        $crud->unset_clone();
        $output = $crud->render();
        $data['page_title'] = "Nilai Siswa";
        $data['menu_active'] = "daftar_rombel";
        $data['go_back'] = "";
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    public function rombel_nilai() {
        $db = get_instance()->db->conn_id;
        $id_rombel = mysqli_real_escape_string($db, $this->uri->segment('3'));
        $this->db->select('*');
        $this->db->where('id_rombel', $id_rombel);
        $query = $this->db->get('rombel');
        $result = $query->row();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        } 
        $crud = new grocery_CRUD();
        $crud->unset_add();
        $crud->set_table('nilai_siswa');
        $crud->where([
            'nilai_siswa.id_rombel' => $id_rombel
        ]);

        $crud->columns(
                'id_rombel',
                'id_siswa',
                'id_mapel_1',
                'id_mapel_2',
                'id_mapel_3',
                'id_mapel_4',
                'id_mapel_5',
                'id_mapel_6',
                'id_mapel_7',
                'output'
        );
        $crud->edit_fields(
                'id_mapel_1',
                'id_mapel_2',
                'id_mapel_3',
                'id_mapel_4',
                'id_mapel_5',
                'id_mapel_6',
                'id_mapel_7',
                'output'
        );

        $crud->set_relation('id_siswa', 'siswa', '{nis} - {nama_siswa}');
        $crud->set_relation('id_rombel', 'rombel', 'kode_rombel');

        $crud->display_as('id_siswa', 'Siswa')
                ->display_as('id_rombel', 'Rombel')
                ->display_as('id_mapel_1', 'Matematika')
                ->display_as('id_mapel_2', 'Bahasa Indonesia')
                ->display_as('id_mapel_3', 'IPA')
                ->display_as('id_mapel_4', 'IPS')
                ->display_as('id_mapel_5', 'Bahasa Inggris')
                ->display_as('id_mapel_6', 'Penjaskes')
                ->display_as('id_mapel_7', 'Seni Budaya')
//                ->display_as('id_personel', 'Guru')
                ->display_as('output', 'Output');

        $crud->callback_field('id_mapel_1', array($this, 'field_callback_id_mapel_1'));
        $crud->callback_field('id_mapel_2', array($this, 'field_callback_id_mapel_2'));
        $crud->callback_field('id_mapel_3', array($this, 'field_callback_id_mapel_3'));
        $crud->callback_field('id_mapel_4', array($this, 'field_callback_id_mapel_4'));
        $crud->callback_field('id_mapel_5', array($this, 'field_callback_id_mapel_5'));
        $crud->callback_field('id_mapel_6', array($this, 'field_callback_id_mapel_6'));
        $crud->callback_field('id_mapel_7', array($this, 'field_callback_id_mapel_7'));

        $crud->callback_edit_field('id_mapel_1', array($this, 'field_callback_id_mapel_1'));
        $crud->callback_edit_field('id_mapel_2', array($this, 'field_callback_id_mapel_2'));
        $crud->callback_edit_field('id_mapel_3', array($this, 'field_callback_id_mapel_3'));
        $crud->callback_edit_field('id_mapel_4', array($this, 'field_callback_id_mapel_4'));
        $crud->callback_edit_field('id_mapel_5', array($this, 'field_callback_id_mapel_5'));
        $crud->callback_edit_field('id_mapel_6', array($this, 'field_callback_id_mapel_6'));
        $crud->callback_edit_field('id_mapel_7', array($this, 'field_callback_id_mapel_7'));

        $crud->unset_texteditor('output', 'full_text');

        $crud->unset_clone();
        $crud->unset_read();
        $crud->unset_delete();
        $output = $crud->render();
        $data['page_title'] = "Daftar Nilai Rombel : " . $result->kode_rombel . "";

        if (mysqli_real_escape_string($db, $this->uri->segment('5')) !== "") {
            $id_nilai_siswa = mysqli_real_escape_string($db, $this->uri->segment('5'));
            $this->db->select('*');
            $this->db->where('id_nilai_siswa', $id_nilai_siswa);
            $query = $this->db->get('rombel_siswa');
            $result2 = $query->row();
            $data['page_title'] = "" . $result2->nama_siswa;
        }

        $data['menu_active'] = "daftar_rombel";
        $data['go_back'] = '<br><a href="' . base_url('main') . '/daftar_rombel">
                                <button type="button" class="btn btn-primary">Kembali Ke Daftar Rombel</button>
                            </a>';
        $data['grup_menu_active'] = "data";
        $output->data = $data;
        $this->_example_output($output);
    }

    function field_callback_id_mapel_1($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_1" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_2($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_2" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_3($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_3" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_4($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_4" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_5($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_5" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_6($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_6" value="' . $value . '"/> ';
    }

    function field_callback_id_mapel_7($value = '', $primary_key = null) {
        return ' <input type="number" min="1" max="100" name="id_mapel_7" value="' . $value . '"/> ';
    }

    function insert() {
        for ($x = 1; $x <= 101; $x++) {
            $sql = "INSERT INTO nilai_siswa ( id_siswa )VALUES(" . $x . ")";
            $query = $this->db->query($sql);
        }
    }

}
