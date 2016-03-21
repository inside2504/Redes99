<?php

	class Tianguis_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->producto)->order_by('idProd',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('idProd', 'desc');
				$consulta = $this->db->get('producto');

				return $consulta->result();
			}
		}

        public function get_producto($pagination, $segment) {
            $this->db->order_by('idProd', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('producto')->result();
            return $query;
        }

        public function get_imagen($items = null, $order = "DESC") {
            if($items){
                return $this->db->select('*')->from($this->producto)->order_by('idProd',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('producto_idProd', 'desc');
                $query = $this->db->get('imgprod')->result();
                return $query;
            }
        }

        public function getImg($idProd){
            $this->db->order_by('idImgProd', 'desc');
            return $this->db->select('imgProd')->from('imgprod')->where('producto_idProd',$idProd)->get()->row()->imgProd;
        }

        public function subir($id,$imagen){
            $data = array(
                'producto_idProd' => $id,
                'imgProd' => $imagen
            );
            return $this->db->insert('imgprod', $data);
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idImgProd', $idi);
            $data = array(
                'idImgProd' => $idi,
                'producto_idProd' => $id,
                'imgProd' => $imagen
            );
            $this->db->update(('imgprod'), $data);
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->producto)->where_in('idProd', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('producto')->where('idProd', $id)->get()->row();
        	}
    	}

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->imgprod)->where_in('idImgProd', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('imgprod')->where('idImgProd', $id)->get()->row();
            }
        }

    	public function get_where($conditions){
        	return $this->db->get_where($this->producto, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('producto')->like('nombProd',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('producto'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('idProd', $id);
        	$this->db->update(('producto'), $data);
    	}

    	public function delete($id){
        	$this->db->where('idProd', $id)->delete('producto');
    	}

	}