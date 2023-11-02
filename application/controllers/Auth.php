<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
	}

	public function index()
	{
		redirect("auth/ingresar");
	}

    public function ingresar(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("usuario", "Usuario", "required|trim|strtolower"); //name del form, Como se muestra a los humanos, condiciones separadas por |
        $this->form_validation->set_rules("password", "Contraseña", "required");
        if ($this->form_validation->run() === false){            
            $this->load->view("login/login");
        }
        else {
            $this->load->model('usuarios_model');
            $usuario= set_value('usuario');
            $password= set_value('password');
            if ($u = $this->usuarios_model->login($usuario, $password)){
                $this->session->usuario_id= $u["usuario_id"];
                $this->session->usuario= $u["usuario"];
                $this->session->nombre= $u["nombre"];
                $this->session->apellido= $u["apellido"];
                redirect("inicio");
            }
            else {
                $this->output->enable_profiler(true);
                //$this->load->view("login/login");
            }
        }
    }

    public function salir(){

    }
}