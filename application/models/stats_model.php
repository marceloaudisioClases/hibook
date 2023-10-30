<?php

    class stat_model extends CI_Model
    {

        protected $table= "stats";
        protected $pk= "stat_id";

        public function stats_create($info) 
        {
            $this->db->insert($this->table, $info);
            if ($this->db->affected_rows())
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function delete_stats($id) {
            $this->db->where($this->pk, $id);
            $this->db->delete($this->table);
            if($this->db->affected_rows())
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function update_stats($id, $info) 
        {
            $this->db->where($this->pk, $id);
            $this->db->update($this->table, $data);
            if($this->db->affected_rows())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
        public function get_stat($id) 
        {
            $this->db->where($this->pk, $id);
            return $this->db->get($this->table)->row();
        }

        public function list_stats() 
        {
            return $this->db->get($this->table)->result();
        }
    }

?>