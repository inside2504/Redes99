<?php

	class Iglesia_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->iglesia)->order_by('idIgle',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idIgle', 'desc');
				$consulta = $this->db->get('iglesia');

				return $consulta->result();
			}
		}

        public function getImg($idIgle){
                return $this->db->select('logo')->from('logoIgle')->where('iglesia_idIgle',$idIgle)->get()->row()->logo;
        }

        public function subir($id,$imagen){
            $data = array(
                'iglesia_idIgle' => $id,
                'logo' => $imagen
            );
            return $this->db->insert('logoIgle', $data);
        }

        public function get_iglesias($pagination, $segment) {
            $this->db->order_by('idIgle', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('iglesia')->result();
            return $query;
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->logoigle)->order_by('idLogoIgle',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('iglesia_idIgle', 'desc');
                $query = $this->db->get('logoigle')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idLogoIgle', $idi);
            $data = array(
                'idLogoIgle' => $idi,
                'iglesia_idIgle' => $id,
                'logo' => $imagen
            );
            $this->db->update(('logoigle'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->fototaxi)->where_in('idLogoIgle', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('logoigle')->where('idLogoIgle', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->iglesia)->where_in('idIgle', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('iglesia')->where('idIgle', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->iglesia, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('iglesia')->like('nomIgle',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('iglesia'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idIgle', $id);
        	$this->db->update(('iglesia'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idIgle', $id)->delete('iglesia');
    	}

	}