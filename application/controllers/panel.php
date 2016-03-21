<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {
	
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
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('administrador');
			$this->load->view('templates/footadmin');
		}
		elseif ($this->ion_auth->in_group('Poster')) {
			$this->load->view('templates/naveedit');
			$this->load->view('editor');
			$this->load->view('templates/footedit');
		}
		elseif ($this->ion_auth->in_group('')) {
			# code...
		}
		
	}
}