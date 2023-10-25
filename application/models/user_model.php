<?php

class user_model extends CI_Model{

    protected $table= "users";
    protected $pk= "user_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join("roles", $this->table.".rol_id= roles.rol_id", "inner");
        $this->db->join("profiles", $this->table.".".$this->pk."= profiles.user_id", "left");
    }

    public function create_user($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_all_users() {
        $this->default_select();
        $this->default_join();
        return $this->db->get($this->table)->result_array();
    }
    
    public function get_user_by_id($user_id) {
        $this->default_select();
        $this->default_join();
        $this->db->where($this->table.".".$this->pk, $user_id);
        return $this->db->get($this->table)->row_array();
    }
    
    public function update_user($user_id, $data) {
        $this->db->where($this->pk, $user_id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    
    public function delete_user($user_id) {
        $this->db->where($this->pk, $user_id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    

    public function check_login($usuario= "", $password= ""){
        $this->db->select($this->pk);
        $this->db->where("user", $usuario);
        $this->db->where("password", $password);
        $this->db->limit(1);
        $res= $this->db->get($this->table);
        if ($res->num_rows()){
            $id= $res->row_array();
            return $this->get_user_by_id($id[$this->pk]);
        } else {
            return false;
        }
    }

}

?>