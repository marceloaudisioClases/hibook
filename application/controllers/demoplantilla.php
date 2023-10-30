<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demoplantilla extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->output->set_template('default');
	}

	public function index()
	{
		$this->load->section('navbar', 'demobarra');
		$this->load->view('demoplantilla');
	}
}
