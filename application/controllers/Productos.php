<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos extends CI_Controller
{

  public function __construct(){
    parent::__construct();
    $this->load->model('MuebleriaModel');
    $this->load->helper('url');
  }
  public function bienvenida(){
    $this->load->view('/Productos/bienvenida_view');
  }
  public function formulario(){
    $this->load->view('/Productos/formulario_view');
  }
  public function insertar_categoria(){
    $this->load->view('/Productos/insertar_categoria_view.php');
  }
  public function listaCategorias(){
    $categorias = $this->MuebleriaModel->getCategorias();
    $data = array(
      'categorias' => $categorias
    );
    $this->load->view('/Productos/categorias_view', $data);
  }
  public function insertarCategoria(){
    $valores = array(
      'nombre' => $this->input->post('nombre'),
      'fecha' => date('Y-m-d H:i:s'),
      'activo' => $this->input->post('status')
    );
    $this->MuebleriaModel->addCategoria($valores);
    redirect(base_url('./index.php/Productos/listaCategorias'));
  }
  public function eliminarCategoria() {
    $id = $this->uri->segment(2);
    $this->MuebleriaModel->lessCategoria($id);
    redirect(base_url('./index.php/Productos/listaCategorias'));
  }
  public function actualizarCategoria() {
    $id = $this->uri->segment(2);
    $categoria = $this->MuebleriaModel->getCategorias($id);
    $categoria = ($categoria != false) ? $categoria->row(0) : false;
    $data = array(
      'categoria' => $categoria
    );
    $this->load->view("/Productos/actualizar_categoria_view", $data);
  }
}
