<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Caracteristicas extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->output->set_template('default');
            $this->output->set_title('HiBook');
            $this->load->model('caracteristicas_model');
        }

        public function index()
        {
            redirect("Caracteristicas/main");
        }

        public function main(){
            $this->load->section('navbar', 'navbar');		
            $data['registros'] = $this->caracteristicas_model->listar();
            $this->load->view('caracteristicas/caracteristicas', $data);
        }
    }
?>
