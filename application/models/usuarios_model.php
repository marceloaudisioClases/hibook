<?php

class usuarios_model extends CI_Model{

    protected $table= "usuarios";
    protected $pk= "usuario_id";

    public function default_select(){
        $this->db->select($this->table.".*");
    }

    public function default_join(){
        $this->db->join("roles", $this->table.".rol_id= roles.rol_id", "inner");
        $this->db->join("perfiles", $this->table.".".$this->pk."= perfiles.usuario_id", "left");
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
    
    public function obtener_por_id($user_id) {
        $this->default_select();
        $this->default_join();
        $this->db->where($this->table.".".$this->pk, $user_id);
        return $this->db->get($this->table)->row_array();
    }
    
    public function editar($user_id, $data) {
        $this->db->where($this->pk, $user_id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }
    
    public function borrar($user_id) {
        $this->db->where($this->pk, $user_id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    

    public function login($usuario= "", $password= ""){
        $this->db->select($this->pk);
        $this->db->where("usuario", $usuario);
        $this->db->where("password", $password);
        $this->db->limit(1);
        $res= $this->db->get($this->table);
        if ($res->num_rows()){
            $id= $res->row_array();
            return $this->obtener_por_id($id[$this->pk]);
        } else {
            return $this->db->error();
        }
    }

    public function listar_por_nombre($nombre =null){
        $this->default_select();
        $this->default_join();

        if ($nombre) {
            $this->db->like('usuario', $nombre);
        }
        return $this->db->get($this->table)->result_array();
    }

    public function traer_stats_email($email){
        // $this->db->select($this->table."email,".$this->db->select_avg("v.valoracion"));
        // $this->db->from($this->table);        
        // $this->db->join("valoraciones as v", $this->table.".".$this->pk."= v.usuario_id", "inner");
        // $this->db->where($this->table."email", $email);
        // //$this->db->join("estadisticas as e", "v.estadisticas_id = e.estadistica_id", "inner");
        // $this->db->group_by($this->table.".".$this->pk);
        // $rsp = $this->db->get($this->table)->result();
        // if(strlen($rsp) > 0){
        //     return $rsp;
        // }else{
        //     return 0;
        // }
        
        $this->db->select($this->table . ".email, AVG(v.valoracion) as promedio_valoracion");
        $this->db->from($this->table);
        $this->db->join("valoraciones as v", $this->table . "." . $this->pk . " = v.usuario_id", "inner");
        $this->db->where($this->table . ".email", $email);
        $this->db->group_by($this->table . "." . $this->pk);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result= $query->result();
            return $result;
            /*$this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));*/
        } else {
            return 0;
        }

       
    }

}

?>