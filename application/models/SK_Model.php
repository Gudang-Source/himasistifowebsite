<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SK_Model extends CI_Model{

    public function insert($data){
        $this->db->insert('kepengurusan',$data);
    }

    public function delete_foto($id){
        $this->db->where('id',$id);
        $result = $this->db->delete('kepengurusan');
        return $result;
    }

    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('kepengurusan');
        return $result->row();
    }

    public function update_foto($data,$id){
        $this->db->where('id',$id);
        $result = $this->db->update('kepengurusan',$data);
        return $result;
    }
}
