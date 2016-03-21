<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Tianguis extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('tianguis_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/tianadmin', $this->data);
	}

	public function tianadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/tianadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regproducto(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/regproducto');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editproducto(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/editproducto');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regproducto.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('tianguis/regproducto');
		} else{
			$data['nombProd'] 			= $this->input->post('nombreprod');
			$data['autoProd'] 			= $this->input->post('autorprod');
			$data['descrProd'] 			= $this->input->post('descripcionprod');
			$data['precProd'] 			= $this->input->post('precioprod');
			$data['nombLibProd'] 		= $this->input->post('nombrelib');
			$data['calleLibProd'] 		= $this->input->post('calle');
			$data['numExtLibProd'] 		= $this->input->post('numexterior');
			$data['numIntLibProd'] 		= $this->input->post('numinterior');
			$data['coloLibProd'] 		= $this->input->post('colonia');
			$data['codPostLibProd'] 	= $this->input->post('codigo');
			$data['ciuLibrProd'] 		= $this->input->post('ciudad');
			$data['edoLibProd'] 		= $this->input->post('edo');
			$data['telefLibProd'] 		= $this->input->post('telefono');
			$data['correEleLibProd'] 	= $this->input->post('correo');
			$data['fBLibProd'] 			= $this->input->post('fb');
			$data['tWLibProd'] 			= $this->input->post('tw');
			$this->my_model->create($data);
			redirect('tianguis/tianadmin');
		}
	}

	public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function subimg() {
        
        $config['upload_path'] = "assets/tianguis/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('tianguis/regimg', $error);
            $this->load->view('templates/footadmin');
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
            redirect('tianguis/tianadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('tianguis/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/tianguis/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('tianguis/tianadmin', $error);
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
            redirect('tianguis/tianadmin');
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
		echo $this->load->view('tianguis/editproducto.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('tianguis/editproducto/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nombProd' 			=> $this->input->post('nombreprod'),
				'autoProd' 			=> $this->input->post('autorprod'),
				'descrProd' 		=> $this->input->post('descripcionprod'),
				'precProd' 			=> $this->input->post('precioprod'),
				'nombLibProd' 		=> $this->input->post('nombrelib'),
				'calleLibProd' 		=> $this->input->post('calle'),
				'numExtLibProd' 	=> $this->input->post('numexterior'),
				'numIntLibProd' 	=> $this->input->post('numinterior'),
				'coloLibProd' 		=> $this->input->post('colonia'),
				'codPostLibProd'	=> $this->input->post('codigo'),
				'ciuLibrProd' 		=> $this->input->post('ciudad'),
				'edoLibProd'	 	=> $this->input->post('edo'),
				'telefLibProd' 		=> $this->input->post('telefono'),
				'correEleLibProd' 	=> $this->input->post('correo'),
				'fBLibProd' 		=> $this->input->post('fb'),
				'tWLibProd' 		=> $this->input->post('tw')
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('tianguis/tianadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('tianguis/tianadmin');
	}
}