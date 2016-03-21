<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Iglesia extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('iglesia_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/igleadmin', $this->data);
	}

	public function igleadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/igleadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/regiglesia');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/editiglesia');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regiglesia.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/regiglesia');
		} else{
			$data['nomIgle'] = $this->input->post('iglesia');
			$data['pasIgle'] = $this->input->post('pastor');
			$data['descIgle'] = $this->input->post('descripcion');
			$data['eslogIgle'] = $this->input->post('eslogan');
			$data['calleIgle'] = $this->input->post('calle');
			$data['numExtIgle'] = $this->input->post('numexterior');
			$data['numInteIgle'] = $this->input->post('numinterior');
			$data['coloIgle'] = $this->input->post('colonia');
			$data['codPostIgle'] = $this->input->post('codigo');
			$data['ciudadIgle'] = $this->input->post('ciudad');
			$data['edoIgle'] = $this->input->post('edo');
			$data['telIgle'] = $this->input->post('telefono');
			$data['correEleIgle'] = $this->input->post('correo');
			$data['fbIgle'] = $this->input->post('fb');
			$data['twIgle'] = $this->input->post('tw');
			$data['mapaIgle'] = $this->input->post('mapa');
			$this->my_model->create($data);
			redirect('iglesia/igleadmin');
		}
	}

	public function subimg() {
        
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
            $data = array('upload_data' => $this->upload->data());
            $id = $this->input->post('id');
            $imagen = $file_info['file_name'];
            $subir = $this->my_model->subir($id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('iglesia/igleadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('iglesia/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/iglesias/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('iglesia/igleadmin', $error);
            $this->load->view('templates/footadmin');
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $data = array('upload_data' => $this->upload->data());
            $idi = $this->input->post('idi');
            $id = $this->input->post('id');
            $imagen = $file_info['file_name'];
            $subir = $this->my_model->updateImg($idi,$id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('iglesia/igleadmin');
        }
    }

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}

	public function editar($id){
		$this->data['item'] 	= $this->my_model->find($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('iglesia/editiglesia.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
	    $this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/editiglesia/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nomIgle' 			=> $this->input->post('iglesia'),
				'pasIgle' 			=> $this->input->post('pastor'),
				'descIgle' 			=> $this->input->post('descripcion'),
				'eslogIgle'			=> $this->input->post('eslogan'),
				'calleIgle' 		=> $this->input->post('calle'),
				'numExtIgle' 		=> $this->input->post('numexterior'),
				'numInteIgle' 		=> $this->input->post('numinterior'),
				'coloIgle' 			=> $this->input->post('colonia'),
				'codPostIgle' 		=> $this->input->post('codigo'),
				'ciudadIgle' 		=> $this->input->post('ciudad'),
				'edoIgle' 			=> $this->input->post('edo'),
				'telIgle' 			=> $this->input->post('telefono'),
				'correEleIgle' 		=> $this->input->post('correo'),
				'fbIgle' 			=> $this->input->post('fb'),
				'twIgle' 			=> $this->input->post('tw'),
				'mapaIgle' 			=> $this->input->post('mapa'),
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('iglesia/igleadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('iglesia/igleadmin');
	}
}