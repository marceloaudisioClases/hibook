<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class UsuarioApi extends REST_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->output->set_template('default');
        $this->output->set_title('HiBook');  
        $this->load->model('usuarios_model');             
    }

    public function index_post()
    {
        $email = $this->input->post('email');
        $rsp = $this->usuarios_model->traer_stats_email($email);

        if($rsp) {
           return json_encode($rsp)
        } else {
            return $this->load->view("errors/html/error_404");            
        }              
    }
}


?>