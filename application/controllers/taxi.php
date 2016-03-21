<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Taxi extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('taxi_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/taxiadmin', $this->data);
	}

	public function taxiadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/taxiadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regtaxi(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/regtaxi');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function edittaxi(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/edittaxi');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regtaxi.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('taxi/regtaxi');
		} else{
			$data['IglePerTaxi'] = $this->input->post('iglesia');
			$data['PastIgleTaxi'] = $this->input->post('pastor');
			$data['NombTaxista'] = $this->input->post('nombre');
			$data['ApePatTaxista'] = $this->input->post('apepaterno');
			$data['ApeMatTaxista'] = $this->input->post('apematerno');
			$data['NumEcoTaxi'] = $this->input->post('numeco');
			$data['PlacaNumTaxi'] = $this->input->post('placa');
			$data['HorarioTaxi'] = $this->input->post('horario');
			$data['TelefTaxi'] = $this->input->post('telefono');
			$this->my_model->create($data);
			redirect('taxi/Taxiadmin');
		}
	}

	public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function subimg() {
        
        $config['upload_path'] = "assets/taxi/";
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
            redirect('taxi/taxiadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('taxi/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/taxi/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('taxi/taxiadmin', $error);
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
            redirect('taxi/taxiadmin');
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
		echo $this->load->view('taxi/edittaxi.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('taxi/edittaxi/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePerTaxi'		=> $this->input->post('iglesia'),
				'PastIgleTaxi'		=> $this->input->post('pastor'),
				'NombTaxista'	 	=> $this->input->post('nombre'),
				'ApePatTaxista' 	=> $this->input->post('apepaterno'),
				'ApeMatTaxista' 	=> $this->input->post('apematerno'),
				'NumEcoTaxi' 		=> $this->input->post('numeco'),
				'PlacaNumTaxi'	 	=> $this->input->post('placa'),
				'HorarioTaxi' 		=> $this->input->post('horario'),
				'TelefTaxi' 		=> $this->input->post('telefono'),
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('taxi/Taxiadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('taxi/Taxiadmin');
	}
}