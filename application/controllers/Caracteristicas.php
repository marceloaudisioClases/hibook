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
            $this->load->model('valoraciones_model');
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

        public function evaluar($id=null){
            $caracteristicas = $this->caracteristicas_model->listar();
            foreach ($caracteristicas as $c){
                $data['usuario_id'] = $id; // usuario a valorar
                $data['valorador_id']= $this->session->usuario_id; // usuario que realiza la evaluacion
                $data['estadistica_id'] = $c['estadistica_id']; // id de la caracteristica a evaluar
                $data['valoracion'] = $this->input->post($c['estadistica_id']); // Valor de valoracion
                $this->valoraciones_model->crear($data);
            }
            redirect('usuario/detalle_usuario?id='.$id);
        }
    }
?>
