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
            $this->load->view("user_auth");
        }
        else {
            $this->load->model('user_model');
            $usuario= set_value('usuario');
            $password= set_value('password');
            if ($u = $this->user_model->check_login($usuario, $password)){
                
            }
        }
    }

    public function salir(){

    }
}