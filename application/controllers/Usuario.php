<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function index()
	{
		redirect("usuario/main");
	}

    public function main(){
        $this->load->view('usuario/usuario');
    }
}
