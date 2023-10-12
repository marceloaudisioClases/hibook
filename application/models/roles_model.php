<?php

class roles_model extends CI_Model{
    protected $table = "roles";
    //  rol_id
    //  name
    //  is_default
    //  state
    protected $pk = "rol_id";

    public function roles_insert($datos = array()){
        $this -> db -> insert($this->table, $datos);
        if ($this -> db -> affected_rows()){
            return $this -> db -> insert_id();
        }else{
            return false;
        }
    }
    public function roles_delete($id = false, $logico){
        if (is_array($id)){
            $this -> db -> where_in($this->pk, $id);
        }else{
            $this -> db -> where($this->pk, $id);
        }
        if ($logico){
            $this -> db -> set("state",0);
            $this -> db -> update($this->table);
        }else{
            $this -> db -> delete($this->table);
        }
        return $this -> db -> affected_rows();
    }
    public function roles_select_all(){
        $resp = $this -> db -> get($this->table.".*");
        return $resp->result_array();
    }

}

?>