<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Navbar extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->output->set_template('default');
            $this->output->set_title('HiBook');
            $this->load->model('usuarios_model');
        }

        public function index()
        {
            redirect("Navbar/main");
        }

        public function main(){
            $this->load->section('navbar', 'navbar');		
            $data = $this->usuarios_model->view($user_id);
        }
    }
?>