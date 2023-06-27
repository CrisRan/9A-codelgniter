
<?php
require APPPATH . 'libraries/REST_Controller.php';

class Categorias extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }   

    public function index_get($id = 0){
        //
        if(!empty($id)){
            $data = $this->db->get_where("categorias", ['id' => $id])->row_array();
        } else {
            $data = $this->db->get('categorias')->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function index_post(){
        $input = $this->input->post();
        $this->db->insert('categorias', $input);
        $this->response([
            'mensaje' => "Categoria Agregada"
        ], REST_Controller::HTTP_OK);
    }
    public function index_put($id){
        $input = $this->put();
        $this->db->update('categorias',$input, array('id' => $id));
        $this->response([
            'mensaje' => "Categoria Actualizada"
        ], REST_Controller::HTTP_OK);
    }
    public function index_delete($id){
        $this->db->delete('categorias', ['id' => $id]);
        $this->response([
            'mensaje' => "Categoria Eliminada"
        ], REST_Controller::HTTP_OK);
    }
}