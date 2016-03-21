<?php

	class Empresa_model extends CI_model{

		public function __construct(){
			parent::__construct();
		}

		public function get($rows = null, $order = "ASC"){
			if($rows){
				return $this->db->select('*')->from($this->empresa)->order_by('AidiEmpr',$order)->limit($rows)->get()->result();
			} else{
                $this->db->order_by('AidiEmpr', 'desc');
				$consulta = $this->db->get('empresa');

				return $consulta->result();
			}
		}

        public function get_empresas($pagination, $segment) {
            $this->db->order_by('AidiEmpr', 'desc');
            $this->db->limit($pagination, $segment);
            $query = $this->db->get('empresa')->result();
            return $query;
        }

        public function getLogo($AidiEmpr){
                return $this->db->select('logoEmpr')->from('logoempr')->where('empresa_AidiEmpr',$AidiEmpr)->get()->row()->logoEmpr;
        }

        public function subirLogo($id,$imagen){
            $data = array(
                'empresa_AidiEmpr' => $id,
                'logoEmpr' => $imagen
            );
            return $this->db->insert('logoempr', $data);
        }

        public function getImg($AidiEmpr){
                return $this->db->select('fotoResp')->from('fotoresp')->where('empresa_AidiEmpr',$AidiEmpr)->get()->row()->fotoResp;
        }

        public function subir($id,$imagen){
            $data = array(
                'empresa_AidiEmpr' => $id,
                'fotoResp' => $imagen
            );
            return $this->db->insert('fotoresp', $data);
        }

        public function get_imagen($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->fotoresp)->order_by('idFotoResp',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('empresa_AidiEmpr', 'desc');
                $query = $this->db->get('fotoresp')->result();
                return $query;
            }
        }

        public function updateImg($idi,$id,$imagen){
            $this->db->where('idFotoResp', $idi);
            $data = array(
                'idFotoResp' => $idi,
                'empresa_AidiEmpr' => $id,
                'fotoResp' => $imagen
            );
            $this->db->update(('fotoresp'), $data);
        }

        public function findImg($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->fotoresp)->where_in('idFotoResp', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('fotoresp')->where('idFotoResp', $id)->get()->row();
            }
        }

        public function get_logo($items = null, $order = "ASC") {
            if($items){
                return $this->db->select('*')->from($this->logoempr)->order_by('idLogoEmpr',$order)->limit($rows)->get()->result();
            }else{
                $this->db->order_by('empresa_AidiEmpr', 'desc');
                $query = $this->db->get('logoempr')->result();
                return $query;
            }
        }

        public function updateLogo($idi,$id,$imagen){
            $this->db->where('idLogoEmpr', $idi);
            $data = array(
                'idLogoEmpr' => $idi,
                'empresa_AidiEmpr' => $id,
                'logoEmpr' => $imagen
            );
            $this->db->update(('logoempr'), $data);
        }

        public function findLogo($id){
            if (is_array($id)) {
                return $this->db->select('*')->from($this->logoempr)->where_in('idLogoEmpr', $id)->get()->result();
            } else {
                return $this->db->select('*')->from('logoEmpr')->where('idLogoEmpr', $id)->get()->row();
            }
        }

		public function find($id){
        	if (is_array($id)) {
           		return $this->db->select('*')->from($this->empresa)->where_in('AidiEmpr', $id)->get()->result();
        	} else {
        		return $this->db->select('*')->from('empresa')->where('AidiEmpr', $id)->get()->row();
        	}
    	}

    	public function get_where($conditions){
        	return $this->db->get_where($this->empresa, $conditions)->result();
    	}

    	public function get_like($conditions){
        	return $this->db->select('*')->from('empresa')->like('GiroEmpres',$conditions)->get()->result();
    	}

		public function create($array){
	        $this->db->insert(('empresa'), $array);
	        return $this->db->insert_id();
    	}

    	public function update($id, array $data){
        	$this->db->where('AidiEmpr', $id);
        	$this->db->update(('empresa'), $data);
    	}

    	public function delete($id){
        	$this->db->where('AidiEmpr', $id)->delete('empresa');
    	}

	}