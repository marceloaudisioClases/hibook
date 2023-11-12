<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	private $data= array();

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->output->set_title('HiBook');					
		$this->load->model('usuarios_model');
		$this->load->model('caracteristicas_model');
		$this->load->model('valoraciones_model');
	}

	public function index()
	{
		redirect("inicio/main");
	}

    public function main(){
		$this->load->section('navbar', 'navbar');	
		$data['registros'] = $this->usuarios_model->listar();
		$data['nombre_completo']= $this->nombre_completo();
		if ($aux_estad=$this->valoraciones_model->traer_estadisticas_usuario($_SESSION['usuario_id'])){
			$data["estadisticas_usuario"] = $aux_estad;
		}
		$data["caracteristicas"] = $this->caracteristicas_model->listar();
        $this->load->view('inicio/inicio', $data);
    }

	public function buscar_por_nombre() {
		$this->load->section('navbar', 'navbar');
		$nombre = $this->input->post('nombre');
		$data['registros'] = $this->usuarios_model->listar_por_nombre($nombre);
		$data['nombre_completo'] = $this->nombre_completo();
		$this->load->view('inicio/inicio', $data);
	}

	private function nombre_completo(){
		if (isset($_SESSION['apellido']) && isset($_SESSION['nombre']))
			return $_SESSION['apellido'] . ' ' . $_SESSION['nombre'];
	}
}

?>
