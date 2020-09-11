<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Blog_Model');
    }

    public function index(){
        $this->load->view('otherPages/blog');
    }

    public function formtambah(){
        $this->load->view('otherPages/form/tambahblog');
    }

    
    public function formubah($id){
        $blog=$this->Blog_Model->select_by_id($id);
        $data=array('blog'=>$blog);
        $this->load->view('otherPages/form/ubahblog',$data);
    }

    public function gotoblog($id){
        $blog=$this->Blog_Model->select_by_id($id);
        $data=array('blog'=>$blog);
        $this->load->view('userPages/blogposting',$data);
    }

    public function tambahblog(){
        $config['upload_path']         = './upload/blog/';  // folder upload 
        $config['allowed_types']        = 'jpg|png'; // jenis file

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')){ //sesuai dengan name pada form 
            $error = $this->upload->display_errors();
            print_r($error);
        }
        else{
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $judul_postingan=$this->input->post('judul_postingan');
            $isi_postingan=$this->input->post('isi_postingan');
            $data = array(
                'judul_postingan' => $judul_postingan,
                'gambar' => $gambar,
                'isi_postingan' => $isi_postingan
            );
            $this->Blog_Model->insert($data);
        }
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menambahkan!</div>');
        redirect('Blog/index');
    }

    public function ubahblog(){
        $config['upload_path']         = './upload/blog/';  // folder upload 
        $config['allowed_types']        = 'jpg|png'; // jenis file

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar')){ //sesuai dengan name pada form 
            $error = $this->upload->display_errors();
            print_r($error);
        }
        else{
            $id=$this->input->post("id");
            $file = $this->upload->data();
            $gambar = $file['file_name'];
            $judul_postingan=$this->input->post('judul_postingan');
            $isi_postingan=$this->input->post('isi_postingan');
            $data = array(
                'judul_postingan' => $judul_postingan,
                'gambar' => $gambar,
                'isi_postingan' => $isi_postingan
            );
            $this->Blog_Model->update_blog($data,$id);
        }
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil mengubah!</div>');
        redirect('Blog/index');
    }

    public function hapusblog($id){
        $this->Blog_Model->delete_blog($id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menghapus!!</div>'); 
        redirect('Blog/index');
    }
}