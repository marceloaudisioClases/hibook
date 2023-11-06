<?php

//Direccion para acceder a esta endpoint es http://localhost/hibook/index.php/UsuarioApi/index_get?email=agus@gmail.com

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class UsuarioApi extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->output->set_template('default');
        $this->output->set_title('HiBook');  
        $this->load->model('usuarios_model');             
    }

    public function index_get()
    {
        $email = $this->input->get('email');
        $rsp = $this->usuarios_model->traer_stats_email($email);

        if($rsp) {
            $this->output
            ->set_output(json_encode($rsp));
        } else {
            return $this->load->view("errors/html/error_404");            
        }              
    }

}

?>