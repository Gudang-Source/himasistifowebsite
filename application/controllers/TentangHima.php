<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangHima extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('TH_Model');
        $this->load->library('form_validation');
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
    }

    public function index(){
        $this->load->view('otherPages/tentanghima');
    }

    public function formubah($id){
        $tentanghima=$this->TH_Model->select_by_id($id);
        $data=array('tentanghima'=>$tentanghima);
        $this->load->view('otherPages/form/ubahtentang',$data);
    }

    public function ubahtentang(){
        $id=$this->input->post("id");
        $visi=$this->input->post('visi');
        $misi=$this->input->post('misi');
        $maknalogo=$this->input->post('maknalogo');
        $data = array(
            'visi' => $visi,
            'misi' => $misi,
            'maknalogo' => $maknalogo
        );
        $this->TH_Model->update_tentang($data,$id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil mengubah!</div>'); 
        redirect('TentangHima/index');
    }

}
