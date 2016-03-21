<?php

	class Material_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->material)->order_by('idMate',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idMate', 'desc');
				$consulta = $this->db->get('material');

				return $consulta->result();
			}
		}

        public function get_material($pagination, $segment) {
            $this->db->order_by('idMate', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('material')->result();
            return $query;
        }

        public function getImg($idMate){
                return $this->db->select('imgMate')->from('imgmate')->where('material_idMate',$idMate)->get()->row()->imgMate;
        }

        public function subir($id,$imagen){
            $data = array(
                'material_idMate' => $id,
                'imgMate' => $imagen
            );
            return $this->db->insert('imgmate', $data);
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->logoempr)->order_by('idImgMate',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('material_idMate', 'desc');
                $query = $this->db->get('imgmate')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idImgMate', $idi);
            $data = array(
                'idImgMate' => $idi,
                'material_idMate' => $id,
                'imgMate' => $imagen
            );
            $this->db->update(('imgmate'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgmate)->where_in('idImgMate', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('imgmate')->where('idImgMate', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->material)->where_in('idMate', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('material')->where('idMate', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->material, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('material')->like('cateMate',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('material'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idMate', $id);
        	$this->db->update(('material'), $data);
    	}

        public function get_image($id){
           $this->db->where('idMate', $id);
           $result = $this->db->get('material');
           header("Content-type: image/jpeg");
           echo $result['image'];
        }

    	public function delete($id){
        	$this->db->where('idMate', $id)->delete('material');
    	}

	}