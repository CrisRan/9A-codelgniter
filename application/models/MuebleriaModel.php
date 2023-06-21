<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MuebleriaModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getCategorias(){
        $resultado = $this->db->get('categorias');
        if($resultado->num_rows() > 0 )
            return $resultado;
        else
            return false;
        
    }
    public function addCategoria($valores){
        $this->db->insert('categorias', $valores);
    }
    public function lessCategoria($id){
        $this->db->where('id', $id);
        $this->db->delete('categorias');
    }

}