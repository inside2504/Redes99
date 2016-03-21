<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Servicio extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('servicio_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/servadmin', $this->data);
	}

	public function servadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('servicio/servadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regservicio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('servicio/regservicio');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editservicio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('servicio/editservicio');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regservicio.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('servicio/regservicio');
		} else{
			$data['IglePert'] = $this->input->post('iglesia');
			$data['PastRec'] = $this->input->post('pastor');
			$data['NamePrestServ'] = $this->input->post('nombre');
			$data['ApePatPrestServ'] = $this->input->post('apepat');
			$data['ApeMatPrestServ'] = $this->input->post('apemat');
			$data['ServOfrecido'] = $this->input->post('servofrece');
			$data['DescServi'] = $this->input->post('descripbreve');
			$data['CalleServ'] = $this->input->post('calle');
			$data['NumExtSer'] = $this->input->post('numexterior');
			$data['NumIntServ'] = $this->input->post('numinterior');
			$data['ColServ'] = $this->input->post('colonia');
			$data['CodPostServ'] = $this->input->post('codigo');
			$data['CiudadServ'] = $this->input->post('ciudad');
			$data['EdoServ'] = $this->input->post('edo');
			$data['TelefServ'] = $this->input->post('telefono');
			$data['telCelServ'] = $this->input->post('celular');
			$data['CorreElectServ'] = $this->input->post('correo');
			$data['DescDetServ'] = $this->input->post('descripserv');
			$data['FbServ'] = $this->input->post('fb');
			$data['TwServ'] = $this->input->post('tw');
			$data['EslogServ'] = $this->input->post('eslogan');
			$this->my_model->create($data);
			redirect('servicio/servadmin');
		}
	}

	public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('servicio/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function subimg() {
        
        $config['upload_path'] = "assets/servicio/";
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
            redirect('servicio/servadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('servicio/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/servicio/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('servicio/servadmin', $error);
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
            redirect('servicio/servadmin');
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
		echo $this->load->view('servicio/editservicio.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('servicio/editservicio/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePert'			 => $this->input->post('iglesia'),
				'PastRec'			 => $this->input->post('pastor'),
				'NamePrestServ'		 => $this->input->post('nombre'),
				'ApePatPrestServ'	 => $this->input->post('apepat'),
				'ApeMatPrestServ'	 => $this->input->post('apemat'),
				'ServOfrecido'		 => $this->input->post('servofrece'),
				'DescServi'			 => $this->input->post('descripbreve'),
				'CalleServ'			 => $this->input->post('calle'),
				'NumExtSer'			 => $this->input->post('numexterior'),
				'NumIntServ'		 => $this->input->post('numinterior'),
				'ColServ'			 => $this->input->post('colonia'),
				'CodPostServ'		 => $this->input->post('codigo'),
				'CiudadServ'		 => $this->input->post('ciudad'),
				'EdoServ'			 => $this->input->post('edo'),
				'TelefServ'			 => $this->input->post('telefono'),
				'telCelServ'		 => $this->input->post('celular'),
				'CorreElectServ'	 => $this->input->post('correo'),
				'DescDetServ'		 => $this->input->post('descripserv'),
				'FbServ'			 => $this->input->post('fb'),
				'TwServ'			 => $this->input->post('tw'),
				'EslogServ'			 => $this->input->post('eslogan'),
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('servicio/servadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('servicio/servadmin');
	}
}