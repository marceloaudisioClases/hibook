<?php

class usuarios_model extends CI_Model{

    protected $table= "users";
    protected $pk= "user_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join($this->table."rol_id= roles.rol_id", "inner");
        $this->db->join($this->table."user_id= profile.user_id", "left");
    }

}

?>