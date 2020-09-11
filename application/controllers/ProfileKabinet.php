<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileKabinet extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('PK_Model');
    }

    public function index(){
        $this->load->view('otherPages/profilekabinet');
    }

    public function formtambah(){
        $this->load->view('otherPages/form/tambahkb');
    }

    public function formubah($id){
        $profilekabinet=$this->PK_Model->select_by_id($id);
        $data=array('profilekabinet'=>$profilekabinet);
        $this->load->view('otherPages/form/ubahkb',$data);
    }

    public function tambahfoto(){
        $config['upload_path']         = './upload/profilekabinet/';  // folder upload 
        $config['allowed_types']        = 'jpg|png'; // jenis file

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('nama_foto')){ //sesuai dengan name pada form 
            $error = $this->upload->display_errors();
            print_r($error);
       }
       else{
           //tampung data dari form
           $file = $this->upload->data();
           $nama_foto = $file['file_name'];
           $this->PK_Model->insert(array('nama_foto' => $nama_foto));
           $this->session->set_flashdata('msg',
           '<div class="alert alert-success" role="alert">Berhasil menambahkan!</div>');
           redirect('ProfileKabinet/index');
        }
    }

    public function ubahfoto(){
        $config['upload_path']         = './upload/profilekabinet/';  // folder upload 
        $config['allowed_types']        = 'jpg|png|pdf'; // jenis file

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('nama_foto')){ //sesuai dengan name pada form 
            $error = $this->upload->display_errors();
            print_r($error);
        }
        else{
            $id=$this->input->post("id");
            $file1 = $this->upload->data();
            $nama_foto=$file1['file_name'];
            $data = array('nama_foto'=>$nama_foto);
            $this->PK_Model->update_foto($data,$id);
        }
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil mengubah!</div>'); 
        redirect('ProfileKabinet/index');
    }

    public function hapusfoto($id){
        $this->PK_Model->delete_foto($id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menghapus!!</div>'); 
        redirect('ProfileKabinet/index');
    }
}