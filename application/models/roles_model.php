<?php
    class roles_model extends CI_Model{
        protected $table="roles";
        protected $pk="rol_id";

        public function default_select(){
            $this->db->select($this->table.".*");
        }
        public function crear($rol=array()){
            $this->db->insert($this->table,$rol);
            if($this->db->affectedrows()){
                return $this->db->insert_id();
            }else {
                return false;
            }
        }

       public function editar($id=false,$rol=array()){
            $this->db->where($this->pk,$id);
            $this->db->update($this->table,$rol);
            if($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
       }

       public function borrar($id=false){
            $this->bd->where($this->pk,$id);
            $this->db->delete($this->table);
            if($this->db->affected_rows()){
                return true;
            }else{
                return false;
            }
       }
       public function listar(){
            $this->default_select();
            return $this->db->get($this->table)->result_array();
       }

       public function obtenerxid($rol_id){
            $this->default_select();
            $this->db->where($this->pk,$rol_id);
            return $this->db->get($this->table)->row_array();
       }
    }



?>