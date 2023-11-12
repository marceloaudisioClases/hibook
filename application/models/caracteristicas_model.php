<?php

    class caracteristicas_model extends CI_Model
    {
        protected $table= "estadisticas";
        protected $pk= "estadistica_id";

        public function default_select(){ 
            $this->db->select($this->table.".*");
        }   

        public function crear($info) 
        {
            $this->db->insert($this->table, $info);
            return $this->db->insert_id();
        }

        public function borrar($id) {
            $this->db->where($this->pk, $id);
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        }

        public function editar($id, $info) 
        {
            $this->db->where($this->pk, $id);
            $this->db->update($this->table, $info);
            return $this->db->affected_rows();
        }
        
        public function obtener_por_id($id) 
        {
            $this->default_select();
            $this->db->where($this->pk, $id);
            return $this->db->get($this->table)->row();
        }

        public function listar() 
        {
            $this->default_select();
            return $this->db->get($this->table)->result_array();
        }
        
    }

?>