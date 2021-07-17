<?php
    class admin_model extends CI_Model {

        public function getlokerAll(){
            $query = $this->db->get('lowongan');
            return $query->result();
        }

        public function getPeminatAll(){
            $query = $this->db->get('peminat_lowongan');
            return $query->result();
        }

        public function getPeminatById($id){
            $query = $this->db->get_where('peminat_lowongan', array('id' => $id));
            return $query->row();
        }

        public function getLowonganById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query->row();
        }

        public function getProdiAll(){
            $query = $this->db->get('prodi');
            return $query->result();
        }
        
        public function getLowonganAll(){
            $query = $this->db->get('lowongan');
            return $query->result();
        }

        public function getById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query->row();
        }
        
        public function getDataLowongan(){
            $this->db->select('lowongan.*, mitra.nama AS mitra_id');
            $this->db->from('lowongan');
            $this->db->join('mitra','mitra.id = lowongan.mitra_id');
            $query = $this->db->get();
            return $query->result();
        }

        public function getDataMitra(){
            $this->db->select('mitra.*, bidang_usaha.nama AS bidang_usaha_id, sektor_usaha.nama AS sektor_usaha_id');
            $this->db->from('mitra');
            $this->db->join('bidang_usaha','bidang_usaha.id = mitra.bidang_usaha_id');
            $this->db->join('sektor_usaha','sektor_usaha.id = mitra.sektor_usaha_id');
            $query = $this->db->get();
            return $query->result();
        }
    }
?>