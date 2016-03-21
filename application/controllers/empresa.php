<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Empresa extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('empresa_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/empreadmin', $this->data);
	}

	public function empreadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/empreadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regempresa(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/regempresa');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editempresa(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/editempresa');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regempresa.php', $this->data);
	}

	public function guardar(){
		if ((!$this->upload->do_upload($logo)) & (!$this->upload->do_upload($foto))) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
		}elseif($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('empresa/regempresa');
		} else{
			$data['IglePertEmpr'] 		= $this->input->post('iglesia');
			$data['PastRecEmpr'] 		= $this->input->post('pastor');
			$data['NameEmpr'] 			= $this->input->post('empresa');
			$data['GiroEmpres'] 		= $this->input->post('giro');
			$data['DescrEmpr'] 			= $this->input->post('descripcion');
			$data['CalleEmpr'] 			= $this->input->post('calle');
			$data['NumExtEmpr'] 		= $this->input->post('numexterior');
			$data['NumIntEmpr'] 		= $this->input->post('numinterior');
			$data['ColEmpr'] 			= $this->input->post('colonia');
			$data['CodPostEmpr'] 		= $this->input->post('codigo');
			$data['CiudadEmpr'] 		= $this->input->post('ciudad');
			$data['EdoEmpr'] 			= $this->input->post('edo');
			$data['TelefEmpr'] 			= $this->input->post('telefono');
			$data['CorreElectEmpr'] 	= $this->input->post('correo');
			$data['DescServEmpr'] 		= $this->input->post('descripserv');
			$data['FbEmpr'] 			= $this->input->post('fb');
			$data['TwEmpr'] 			= $this->input->post('tw');
			$data['EslogEmpr'] 			= $this->input->post('eslogan');
			$data['NombRespEmpr'] 		= $this->input->post('nombre');
			$data['ApePatRespEmpr'] 	= $this->input->post('apepat');
			$data['ApeMatRespEmpr'] 	= $this->input->post('apemat');
			$data['TelefRespEmpr'] 		= $this->input->post('teleres');
			var_dump($data);
			$this->my_model->create($data);
			redirect('empresa/empreadmin');
		}
	}

	public function reglogo(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/reglogo');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function sublogo() {
        
        $config['upload_path'] = "assets/empresa/";
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
            $subir = $this->my_model->subirLogo($id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('empresa/empreadmin');
        }
    }

    public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

    public function subimg() {
        
        $config['upload_path'] = "assets/empresa/";
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
            redirect('empresa/empreadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('empresa/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/empresa/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('empresa/empreadmin', $error);
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
            redirect('empresa/empreadmin');
        }
    }

    public function editarLogo($id){
		$this->data['cols'] 	= $this->my_model->findLogo($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('empresa/editlogo.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editlogo($id) {
        
        $config['upload_path'] = "assets/empresa/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('empresa/empreadmin', $error);
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
            $subir = $this->my_model->updateLogo($idi,$id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('empresa/empreadmin');
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
		echo $this->load->view('empresa/editempresa.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('empresa/editempresa/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePertEmpr'	 		=> $this->input->post('iglesia'),
				'PastRecEmpr' 			=> $this->input->post('pastor'),
				'NameEmpr'	 			=> $this->input->post('empresa'),
				'GiroEmpres' 			=> $this->input->post('giro'),
				'DescrEmpr' 			=> $this->input->post('descripcion'),
				'CalleEmpr' 			=> $this->input->post('calle'),
				'NumExtEmpr' 			=> $this->input->post('numexterior'),
				'NumIntEmpr' 			=> $this->input->post('numinterior'),
				'ColEmpr' 				=> $this->input->post('colonia'),
				'CodPostEmpr' 			=> $this->input->post('codigo'),
				'CiudadEmpr' 			=> $this->input->post('ciudad'),
				'EdoEmpr' 				=> $this->input->post('edo'),
				'TelefEmpr' 			=> $this->input->post('telefono'),
				'CorreElectEmpr' 		=> $this->input->post('correo'),
				'DescServEmpr'	 		=> $this->input->post('descripserv'),
				'FbEmpr' 				=> $this->input->post('fb'),
				'TwEmpr' 				=> $this->input->post('tw'),
				'EslogEmpr' 			=> $this->input->post('eslogan'),
				'NombRespEmpr'	 		=> $this->input->post('nombre'),
				'ApePatRespEmpr' 		=> $this->input->post('apepat'),
				'ApeMatRespEmpr' 		=> $this->input->post('apemat'),
				'TelefRespEmpr' 		=> $this->input->post('teleres'),
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('empresa/empreadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('empresa/empreadmin');
	}
}