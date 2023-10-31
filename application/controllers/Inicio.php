<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->output->set_title('HiBook');			
		$this->load->model('usuarios_model');
	}

	public function index()
	{
		redirect("inicio/main");
	}

    public function main(){
		$this->load->section('navbar', 'navbar');	
		$data['registros'] = $this->usuarios_model->listar();
		if (isset($_SESSION['apellido']) && isset($_SESSION['nombre']))
			$data['nombre_completo']= $_SESSION['apellido'] . ' ' . $_SESSION['nombre'];
        $this->load->view('inicio/inicio', $data);
    }

	public function buscar_por_nombre() {
		$this->load->section('navbar', 'navbar');
		$nombre = $this->input->post('nombre');
		$data['registros'] = $this->usuarios_model->listar_por_nombre($nombre);
		$this->load->view('inicio/inicio', $data);
	}
}

?>
