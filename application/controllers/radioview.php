<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Radioview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		
		$this->load->view('radio');
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}
}