<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
	}

	public function index()
	{
		redirect("inicio/main");
	}

    public function main(){
		$this->load->section('navbar', 'navbar');
		$data['registros'] = $this->usuarios_model->listar();		
        $this->load->view('inicio/inicio', $data);
    }

	public function buscarPorNombre() {
		$nombre = $this->input->post('nombre');
		$this->load->model('usuarios_model'); // Reemplaza 'TuModelo' con el nombre de tu modelo
		$data['registros'] = $this->usuarios_model->listar_por_nombre($nombre);
		$this->load->view('Inicio/inicio', $data);
	}
}
