<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
	}

	public function index()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administrador');
		$this->load->view('templates/footadmin');
	}
}