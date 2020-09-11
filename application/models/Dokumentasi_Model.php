<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi_Model extends CI_Model{

    public function insertfoto($data){
        $this->db->insert('foto',$data);
    }

    public function insertjudul($data){
        $this->db->insert('judul',$data);
    }

    public function delete_foto($id){
        $this->db->where('id_judul',$id);
        $result = $this->db->delete('foto');
        return $result;
    }

    public function delete_judul($id){
        $this->db->where('id',$id);
        $result = $this->db->delete('judul');
        return $result;
    }

    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('dokumentasi');
        return $result->row();
    }

    public function data_judul(){
        $this->db->select('*');
        $this->db->from('judul');   
        $query = $this->db->get();
        return $query;
    }

    public function data_foto(){
        $this->db->select('*');
        $this->db->from('foto'); 
        $this->db->join('judul','judul.id = foto.id_judul');   
        $query = $this->db->get();
        return $query;
    }

    public function duatable(){
        $this->db->select('*');
        $this->db->from('foto'); 
        $this->db->join('judul','judul.id = foto.id_judul');   
        $query = $this->db->get();
        return $query;
    }
}
