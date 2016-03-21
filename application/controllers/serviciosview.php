<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Serviciosview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('servicio_model','my_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$pagination = 3;
	    $config['base_url'] = base_url().'serviciosview/index/';
	    $config['total_rows'] = $this->db->get('servicio')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último »';

	    $this->pagination->initialize($config);
	   
	    $data['results'] = $this->my_model->get_servicio($pagination, $this->uri->segment(3));
		$this->load->view('templates/navegacion');
		
		$this->load->view('servicios', $data);
		$this->load->view('templates/footer');
	}

	public function datos($id){
		$this->data['item'] = $this->my_model->find($id);
		$this->data['imgServ'] = $this->my_model->getImg($id);
		$this->load->view('templates/navegacion');
		echo $this->load->view('datosservicio.php', $this->data); 
		$this->load->view('templates/footer');
	}

	public function buscar(){
		$q=$_GET['buscar'];
		$this->dato['total'] = $this->my_model->get();
		$this->data['item'] = $this->my_model->get_like($q);
		$this->load->view('templates/navegacion');
		echo $this->load->view('buscserv.php', $this->data, $this->dato); 
		$this->load->view('templates/footer');
	}

}