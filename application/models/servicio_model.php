<?php

	class Servicio_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->servicio)->order_by('AidiServi',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('AidiServi', 'desc');
				$consulta = $this->db->get('servicio');

				return $consulta->result();
			}
		}

        public function get_servicio($pagination, $segment) {
            $this->db->order_by('AidiServi', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('servicio')->result();
            return $query;
        }

        public function getImg($AidiServi){
                return $this->db->select('imgServ')->from('imgserv')->where('servicio_AidiServi',$AidiServi)->get()->row()->imgServ;
        }

        public function subir($id,$imagen){
            $data = array(
                'servicio_AidiServi' => $id,
                'imgServ' => $imagen
            );
            return $this->db->insert('imgserv', $data);
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->imgser)->order_by('idimgServ',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('servicio_AidiServi', 'desc');
                $query = $this->db->get('imgserv')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idimgServ', $idi);
            $data = array(
                'idimgServ' => $idi,
                'servicio_AidiServi' => $id,
                'imgServ' => $imagen
            );
            $this->db->update(('imgserv'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgserv)->where_in('idimgServ', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('imgserv')->where('idimgServ', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->servicio)->where_in('AidiServi', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('servicio')->where('AidiServi', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where('servicio', $conditions)->get()->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('servicio')->like('ServOfrecido',$conditions)->get()->result();
    	}

         public function count(){
            $result = $this->db->count_all_results();
            return $result;
        }

		public function create($array){
	        $this->db->insert(('servicio'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiServi', $id);
        	$this->db->update(('servicio'), $data);
    	}

    	public function delete($id){
        	$this->db->where('AidiServi', $id)->delete('servicio');
    	}

	}