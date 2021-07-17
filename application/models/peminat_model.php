<?php
    class peminat_model extends CI_Model {

        public function save($data){
            $sql = "INSERT INTO peminat_lowongan (nim,nama,alasan,prodi_id,lowongan_id) VALUES (?,?,?,?,?)";
            $this->db->query($sql, $data);
        }
        
        public function update($data){
            $sql =  "UPDATE peminat_lowongan SET nim=?,nama=?,alasan=?,prodi_id=?,lowongan_id=? WHERE  id=?";
            $this->db->query($sql, $data);
        }

        public function delete($data){
            $sql = "DELETE FROM peminat_lowongan WHERE id=?";
            $this->db->query($sql, $data);
        }

        public function getProdiAll(){
            $query = $this->db->get('prodi');
            return $query->result();
        }

        public function getLowonganAll(){
            $query = $this->db->get('lowongan');
            return $query->result();
        }

        public function getDataPeminat(){
            $this->db->select('peminat_lowongan.*, prodi.nama AS prodi_id, lowongan.deskripsi_pekerjaan AS lowongan_id');
            $this->db->from('peminat_lowongan');
            $this->db->join('prodi','prodi.id = peminat_lowongan.prodi_id');
            $this->db->join('lowongan','lowongan.id = lowongan_id');
            $query = $this->db->get();
            return $query->result();
        }

    
    }
?>