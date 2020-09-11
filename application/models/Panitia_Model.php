<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia_Model extends CI_Model{
    
    ##untuk post panitia ke database
    public function registpanitia(){
        $cvup = $this->uploadcv($_POST);
        $data = array(
            'cv'    => $cvup['file_name'],
            'name'  => $this->input->post('name'),
            'nim'   => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'email' => $this->input->post('email'),
            'kontak'=> $this->input->post('kontak'),
            'divisi'=> $this->input->post('divisi'),
            'panitiasdg'  => $this->input->post('panitiasdg')
        );
        return $this->db->insert('panitia', $data);
    }

    ##fungsi upload cv
    public function uploadcv($post){
        $_POST=$post;
        $config['upload_path'] 		= './upload/cv';
        $config['allowed_types'] 	= 'jpg|png';
        $config['encrypt_name'] = FALSE; //nama yang terupload nantinya
        $config['detect_mime'] = TRUE; //nama yang terupload nantinyas
        $config['remove_spaces'] = TRUE; //menghapus spasi pada nama file
        

        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cv');
        $file = $this->upload->data();
        unset($config);
        return $file;
    }
    
    public function get_count() {
        return $this->db->count_all('panitia');
    }

    public function get_panitia($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('panitia');

        return $query->result();
    }

    ##CRUD
    public function delete_panitia($id){
        $this->db->where('id',$id);
        $result = $this->db->delete('panitia');
        return $result;
    }

    public function update_form($data,$id){
        $this->db->where('id',$id);
        $result = $this->db->update('status',$data);
        return $result;
    }

}