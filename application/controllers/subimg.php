<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->my_model('imgigle_model');
    }

    function index() {
        //CARGAMOS LA VISTA DEL FORMULARIO
        $this->data['items'] = $this->my_model->all();
        echo $this->render->view('path/to/view/igleadmin', $this->data);
    }

    public function registrar(){
        $this->data['errors'] = $this->session->flashdata('errors');
        echo $this->render->view('path/to/view/regiglesia.php', $this->data);
    }

    //FUNCIÓN PARA SUBIR LA IMAGEN Y VALIDAR EL TÍTULO
    function do_upload() {
        
        $config['upload_path'] = "assets/iglesias/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '500';
        $config['max_height'] = '500';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_view', $error);
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $this->_create_thumbnail($file_info['file_name']);
            $data = array('upload_data' => $this->upload->data());
            $imagen = $file_info['file_name'];
            $subir = $this->upload_model->subir($imagen);
            $data['imagen'] = $imagen;
            $this->load->view('imagen_subida_view', $data);
        }
    }