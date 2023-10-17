<?php

class usuarios_model extends CI_Model{

    protected $table= "users";
    protected $pk= "user_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join($this->table.".rol_id= roles.rol_id", "inner");
        $this->db->join($this->table.".user_id= profile.user_id", "left");
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
        $this->db->where($this->pk, $user_id);
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
    

}

?>