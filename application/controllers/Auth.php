<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		redirect("auth/ingresar");
	}

    public function ingresar(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules("usuario", "Usuario", "required|trim|strtolower"); //name del form, Como se muestra a los humanos, condiciones separadas por |
        $this->form_validation->set_rules("password", "Contraseña", "required");
        if ($this->form_validation->run() === false){
            
            $this->load->view("login");
        }
        
    }

    public function salir(){

    }
}