<?php
    class daftarmitra_model extends CI_Model {

        public function getmitraAll(){
            $query = $this->db->get('mitra');
            return $query->result();
        }

        public function getbdusahaAll(){
            $query = $this->db->get('bidang_usaha');
            return $query->result();
        }

        public function getshusahaAll(){
            $query = $this->db->get('sektor_usaha');
            return $query->result();
        }

        public function getmitraById($id){
            $query = $this->db->get_where('mitra', array('id' => $id));
            return $query->row();
        }

        public function save($data){
            $sql = "INSERT INTO mitra (nama,alamat,kontak,telpon,email,web,bidang_usaha_id,sektor_usaha_id) VALUES (?,?,?,?,?,?,?,?)";
            $this->db->query($sql, $data);
        }

        public function update($data){
            $sql =  "UPDATE mitra SET nama=?,alamat=?,kontak=?,telpon=?,email=?,web=?,bidang_usaha_id=?,sektor_usaha_id=? WHERE  id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM mitra WHERE id=?";
            $this->db->query($sql, $data);
        }

    }
?>