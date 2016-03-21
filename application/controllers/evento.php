<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Evento extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('evento_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/eventoadmin', $this->data);
	}

	public function eventoadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/eventoadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regevento(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/regevento');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editevento(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/editevento');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regevento.php', $this->data);
	}

	public function guardar(){
	    if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('evento/regevento');
		} else{
			$this->load->model("evento_model");
        	$this->evento_model->create();
			redirect('evento/eventoadmin');
		}
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('evento_model');
			$events = $this->evento_model->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
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
		echo $this->load->view('evento/editevento.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('evento/editevento/'.$id);

		} else {
        	$this->evento_model->update($id);
			redirect('evento/eventoadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('evento/eventoadmin');
	}
}