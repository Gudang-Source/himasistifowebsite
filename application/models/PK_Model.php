<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PK_Model extends CI_Model{

    public function insert($data){
        $this->db->insert('kabinet',$data);
    }

    public function delete_foto($id){
        $this->db->where('id',$id);
        $result = $this->db->delete('kabinet');
        return $result;
    }

    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('kabinet');
        return $result->row();
    }

    public function update_foto($data,$id){
        $this->db->where('id',$id);
        $result = $this->db->update('kabinet',$data);
        return $result;
    }
}
