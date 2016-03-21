<?php

	class Kids_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->kids)->order_by('AidiKids',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('AidiKids', 'desc');
				$consulta = $this->db->get('kids');

				return $consulta->result();
			}
		}

        public function get_contenido($pagination, $segment) {
            $this->db->order_by('AidiKids', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('kids')->result();
            return $query;
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->kids)->where_in('AidiKids', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('kids')->where('AidiKids', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->kids, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->kids)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('kids'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiKids', $id);
        	$this->db->update(('kids'), $data);
    	}

        public function get_image($id){
           $this->db->where('AidiKids', $id);
           $result = $this->db->get('kids');
           header("Content-type: image/jpg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('AidiKids', $id)->delete('kids');
    	}

	}