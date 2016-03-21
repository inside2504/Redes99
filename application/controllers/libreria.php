<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Libreria extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('templates/navelib');
		$this->load->view('libreria');
		$this->load->view('templates/footlib');
	}
}