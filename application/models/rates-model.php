<?php

class rates_model extends CI_Model{

    protected $table= "rates";
    protected $pk= "rate_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join("comments", $this->table.".".$this->pk."= comments.rate_id", "left");
    }

    public function create_rate($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_all_rates() {
        $this->default_select();
        $this->default_join();
        return $this->db->get($this->table)->result_array();
    }
    
    public function get_rate_by_id($rate_id) {
        $this->default_select();
        $this->default_join();
        $this->db->where($this->pk, $rate_id);
        return $this->db->get($this->table)->row_array();
    }
    
    public function update_rate($rate_id, $data) {
        $this->db->where($this->pk, $rate_id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    
    public function delete_rate($rate_id) {
        $this->db->where($this->pk, $rate_id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

}

?>