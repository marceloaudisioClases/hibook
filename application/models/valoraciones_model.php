<?php

class valoraciones_model extends CI_Model{

    protected $table= "valoraciones";
    protected $pk= "valoracion_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join("comentarios", $this->table.".".$this->pk."= comentarios.valoracion_id", "left");
    }

    public function crear($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function listar() {
        $this->default_select();
        $this->default_join();
        return $this->db->get($this->table)->result_array();
    }
    
    public function buscar_por_id($rate_id) {
        $this->default_select();
        $this->default_join();
        $this->db->where($this->pk, $rate_id);
        return $this->db->get($this->table)->row_array();
    }
    
    public function editar($rate_id, $data) {
        $this->db->where($this->pk, $rate_id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    
    public function eliminar($rate_id) {
        $this->db->where($this->pk, $rate_id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function traer_estadisticas_usuario($usuario_id= 0){
        if ($usuario_id > 0){
            $this->db->select("estadisticas.nombre, ROUND(AVG(". $this->table .".valoracion), 1) as promedio_valoracion");
            $this->db->from($this->table);
            $this->db->join("estadisticas", $this->table . ".estadistica_id = estadisticas.estadistica_id", "inner");
            $this->db->where("valoraciones.usuario_id", $usuario_id);
            $this->db->group_by("valoraciones.estadistica_id");
    
            $query = $this->db->get();
    
            if ($query->num_rows() > 0) {
                $result= $query->result_array();
                return $result;
            } 
        }
        return false;
    }

}

?>