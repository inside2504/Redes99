<?php

	class Taxi_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->taxi)->order_by('AidiTaxi',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('AidiTaxi', 'desc');
				$consulta = $this->db->get('taxi');

				return $consulta->result();
			}
		}

        public function get_taxistas($pagination, $segment) {
            $this->db->order_by('AidiTaxi', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('taxi')->result();
            return $query;
        }

        public function getImg($AidiTaxi){
                return $this->db->select('*')->from('fototaxi')->where('taxi_AidiTaxi',$AidiTaxi)->get()->row()->fotoTaxi;
        }

        public function subir($id,$imagen){
            $data = array(
                'taxi_AidiTaxi' => $id,
                'fotoTaxi' => $imagen
            );
            return $this->db->insert('fototaxi', $data);
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->taxi)->order_by('idfotoTaxi',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('taxi_AidiTaxi', 'desc');
                $query = $this->db->get('fotoTaxi')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idfotoTaxi', $idi);
            $data = array(
                'idfotoTaxi' => $idi,
                'taxi_AidiTaxi' => $id,
                'fototaxi' => $imagen
            );
            $this->db->update(('fototaxi'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->fototaxi)->where_in('idfotoTaxi', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('fotoTaxi')->where('idfotoTaxi', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->taxi)->where_in('AidiTaxi', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('taxi')->where('AidiTaxi', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->taxi, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from($this->taxi)->like($conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('taxi'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiTaxi', $id);
        	$this->db->update(('taxi'), $data);
    	}

        public function get_image($id){
           $this->db->where('AidiTaxi', $id);
           $result = $this->db->get('taxi');
           header("Content-type: image/jpeg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('AidiTaxi', $id)->delete('taxi');
    	}

	}