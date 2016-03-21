<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventosview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('evento_model','my_model');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		$this->load->view('eventos');
		$this->load->view('templates/footer');
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
}