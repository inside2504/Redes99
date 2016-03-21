<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evento_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("America/Mexico_City"); 
	}

	public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->evento)->order_by('id',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('id', 'desc');
				$consulta = $this->db->get('evento');

				return $consulta->result();
			}
	}

	public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->evento)->where_in('id', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('evento')->where('id', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->evento, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->evento)->like($conditions)->get()->result();
    	}

		public function create(){
			$this->db->set("start", $this->_formatDate($this->input->post("from")));
			$this->db->set("end", $this->_formatDate($this->input->post("to")));
			$this->db->set("title", $this->input->post("title"));
			$this->db->set("body", $this->input->post("event"));
			$this->db->set("class", $this->input->post("class"));
			if($this->db->insert("evento"))
			{
				return TRUE;
			}
			return FALSE;
    	}

    	public function delete($id){
        	$this->db->where('id', $id)->delete('evento');
    	}

	public function getAll()
	{
		$query = $this->db->get('evento');
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		return object();
	}

	private function _formatDate($date)
	{
		return strtotime(substr($date, 6, 4)."-".substr($date, 3, 2)."-".substr($date, 0, 2)." " .substr($date, 10, 6)) * 1000;
	}
}
/* End of file evento_model.php */
/* Location: ./application/models/evento_model.php */