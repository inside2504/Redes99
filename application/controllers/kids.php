<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kids extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('kids_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/kidsadmin', $this->data);
	}

	public function kidsadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/kidsadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regkids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/regkids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editkids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/editkids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regkids.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('kids/regkids');
		} else{
			$data['TituloKids'] 		= $this->input->post('titulo');
			$data['TextKids'] 			= $this->input->post('texto');
			$data['FechaCreacion'] 		= $this->input->post('fecha');
			$data['LinkKids'] 			= $this->input->post('link');
			$this->my_model->create($data);
			redirect('kids/kidsadmin');
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
		echo $this->load->view('kids/editkids.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('kids/editkids/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'TituloKids'		=> $this->input->post('titulo'),
				'TextKids'	 		=> $this->input->post('texto'),
				'FechaCreacion'	 	=> $this->input->post('fecha'),
				'LinkKids' 			=> $this->input->post('link')				
			);
			var_dump($data);
			$this->my_model->update($id,$data);
			redirect('kids/kidsadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('kids/kidsadmin');
	}
}