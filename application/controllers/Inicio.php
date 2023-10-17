<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		redirect("inicio/main");
	}

    public function main(){
        $this->load->view('inicio/inicio');
    }
}
