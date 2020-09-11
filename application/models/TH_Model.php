<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TH_Model extends CI_Model{

    public function select_tentang(){
        return $this->db->get('tentanghima')->result();
    }

    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('tentanghima');
        return $result->row();
    }

    public function update_tentang($data,$id){
        $this->db->where('id',$id);
        $result = $this->db->update('tentanghima', $data);
        return $result;
    }

    public function tampilin_visi(){
        $this->db->select('visi'); 
        $this->db->from('tentanghima');   
        $this->db->where('id', $id);
        return $this->db->get()->result();
    }
    
}