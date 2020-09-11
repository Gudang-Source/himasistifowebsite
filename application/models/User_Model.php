<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Model extends CI_Model{

    public function select_user(){
        return $this->db->get('user')->result();
    }

    public function select_by_id($id){
        $this->db->where('id',$id);
        $result = $this->db->get('user');
        return $result->row();
    }


    ##check valid for user who level 1 or 2
    public function validates1($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('user');
        return $result;
    }
    
    ##check valid for user
    public function validates2($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('user');
        return $result;
    }

    
}