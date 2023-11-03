<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
		$this->output->set_title('HiBook');
	}

	public function index()
	{
		redirect("usuario/main");
	}

    public function main(){
		$this->load->section('navbar', 'navbar');
        $this->load->view('usuario/usuario');
    }

	public function detalle_usuario(){
		$this->load->section('navbar', 'navbar');
		$this->load->model('usuarios_model');
		$this->load->model('caracteristicas_model');
		$this->load->model('valoraciones_model');
		$id_usuario = $this->input->get('id');
		$data["estadisticas_usuario"] = $this->valoraciones_model->traer_estadisticas_usuario($id_usuario);
		$data["caracteristicas"] = $this->caracteristicas_model->listar();
		$data["usuario"] = $this->usuarios_model->obtener_por_id($id_usuario);
		$this->load->view('usuario/usuario',$data);
	}
}
