<?php
    class isiloker_model extends CI_Model {

        public function getmitraAll(){
            $query = $this->db->get('mitra');
            return $query->result();
        }

        public function find_lokerById($id){
            $query = $this->db->get_where('lowongan', array('id' => $id));
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO lowongan (deskripsi_pekerjaan,tanggal_akhir,mitra_id,email) VALUES (?,?,?,?)";
            $this->db->query($sql, $data);
        }
        
        public function update($data){
            $sql =  "UPDATE lowongan SET deskripsi_pekerjaan=?,tanggal_akhir=?,mitra_id=?,email=? WHERE  id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM lowongan WHERE id=?";
            $this->db->query($sql, $data);
        }


    }
?>