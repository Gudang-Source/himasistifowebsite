<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturKepengurusan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('SK_Model');
    }

    public function index(){
        $this->load->view('otherPages/strukturkepengurusan');
    }

    public function formtambah(){
        $this->load->view('otherPages/form/tambahsk');
    }

    public function formubah($id){
        $strukturkepengurusan=$this->SK_Model->select_by_id($id);
        $data=array('strukturkepengurusan'=>$strukturkepengurusan);
        $this->load->view('otherPages/form/ubahsk',$data);
    }

    public function tambahfoto(){
        $config['upload_path']         = './upload/strukturkepengurusan/';  // folder upload 
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
           $this->SK_Model->insert(array('nama_foto' => $nama_foto));
           $this->session->set_flashdata('msg',
           '<div class="alert alert-success" role="alert">Berhasil menambahkan!</div>');
           redirect('StrukturKepengurusan/index');
        }
    }

    public function ubahfoto(){
        $config['upload_path']         = './upload/strukturkepengurusan/';  // folder upload 
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
            $this->SK_Model->update_foto($data,$id);
        }
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil mengubah!</div>'); 
        redirect('StrukturKepengurusan/index');
    }

    public function hapusfoto($id){
        $this->SK_Model->delete_foto($id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menghapus!!</div>'); 
        redirect('StrukturKepengurusan/index');
    }
}