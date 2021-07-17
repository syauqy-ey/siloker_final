<?php
    class lowongan_model extends CI_Model {

        public function detail($id = NULL){
            $query = $this->db->get_where('lowongan', array('id' => $id))->row();
            return $query;
        }

        public function getDataLowongan(){
            $this->db->select('lowongan.*, mitra.nama AS mitra_id');
            $this->db->from('lowongan');
            $this->db->join('mitra','mitra.id = lowongan.mitra_id');
            $query = $this->db->get();
            return $query->result();
        }
    
    }
?>