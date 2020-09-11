<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_Model extends CI_Model{

    public function insert($data){
        $this->db->insert('blog',$data);
    }

    public function update_blog($data,$id){
        $this->db->where('id',$id);
        $result = $this->db->update('blog', $data);
        return $result;
    }


    public function delete_blog($id){
        $this->db->where('id',$id);
        $result = $this->db->delete('blog');
        return $result;
    }


    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('blog');
        return $result->row();
    }

}
