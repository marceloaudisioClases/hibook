<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model'); 
    }

    //Trae todos los usuarios
   public function index() {
        $data['users'] = $this->user_model->get_all_users();
        $this->load->view('users_list', $data); 
    }

    //trae un solo usuario
    public function view($user_id) {
        $data['user'] = $this->user_model->get_user_by_id($user_id);
        $this->load->view('user_view', $data); 
    }
    
    //crea usuario
    public function create() {
        $this->load->view('user_create'); 
    }

    //guarda usuario en bd
    public function store() {
        $data = array(
            //infor del form
        );
        $inserted_id = $this->user_model->create_user($data);
        if ($inserted_id) {
            redirect('users/view/' . $inserted_id);
        } else {
            // error
        }
    }

    //editar usuario
       public function edit($user_id) {
        $data['user'] = $this->user_model->get_user_by_id($user_id);
        $this->load->view('user_edit', $data); 
    }

    //modifica usuario en bd
    public function update($user_id) {
        $data = array(
        );
        $updated_rows = $this->user_model->update_user($user_id, $data);
        if ($updated_rows) {
            redirect('users/view/' . $user_id);
        } else {
            // error
        }
    }

  //elimina usuario
  public function delete($user_id) {
    $deleted_rows = $this->user_model->delete_user($user_id);
    if ($deleted_rows) {
        redirect('users');
    } else {
        //error
    }
}
}
