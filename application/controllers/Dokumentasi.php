<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumentasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Dokumentasi_Model');
    }

    public function index(){
        $data['judul'] = $this->Dokumentasi_Model->data_judul()->result();
        $data['foto'] = $this->Dokumentasi_Model->data_foto()->result();
        $data['joinjudulfoto'] = $this->Dokumentasi_Model->duatable()->result();
        $this->load->view('otherPages/dokumentasi',$data);
    }

    public function formtambah(){
        $this->load->view('otherPages/form/tambahdk');
    }

    public function tambahdokumentasi(){
        $this->load->library('upload');

        $nama_kegiatan = $this->input->post('nama_kegiatan');
        $this->Dokumentasi_Model->insertjudul(array('nama_kegiatan' => $nama_kegiatan));
        $lastidjudul = $this->db->insert_id();
        $datafoto = [
            'id_judul' => $lastidjudul,
        ];

        $jumlah = count($_FILES['nama_foto']['name']);
        for($i=0; $i<$jumlah; $i++){
            $_FILES['userfile']['name'] = $_FILES['nama_foto']['name'][$i];
            $_FILES['userfile']['type']     = $_FILES['nama_foto']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $_FILES['nama_foto']['tmp_name'][$i];
            $_FILES['userfile']['error']    = $_FILES['nama_foto']['error'][$i];
            $_FILES['userfile']['size'] = $_FILES['nama_foto']['size'][$i];

            $config = array(
                'upload_path' => './upload/dokumentasi/',
                'allowed_types' => 'jpg|png'
            );

            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('otherPages/form/tambahdk', $error);
            } else{
                $file = $this->upload->data();
                $nama_foto = $file['file_name'];
                $this->Dokumentasi_Model->insertfoto(array('id_judul' => $lastidjudul, 'nama_foto' => $nama_foto));
            }
        }
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menambah!!</div>'); 
        redirect('Dokumentasi/index');
    }

    public function hapusfoto($id){
        $this->Dokumentasi_Model->delete_judul($id);
        $this->Dokumentasi_Model->delete_foto($id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menghapus!!</div>'); 
        redirect('Dokumentasi/index');
    }
    
}