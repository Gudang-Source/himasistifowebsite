<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPages extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('User_Model');
        $this->load->model('Panitia_Model');
        $this->load->library('form_validation');
	}

	public function loginpage(){
		$this->load->view('userPages/login');
    }

    public function panitiapage(){
        $this->load->view('userPages/panitia');
    }

    public function dashboardpanitia(){
        $this->load->view('otherPages/panitia');
    }

	##login checking with 3 level
    public function auth(){
        $username    = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->User_Model->validates2($username,$password);
            if($validate->num_rows() > 0){
                $data  = $validate->row_array();
                $username = $data['username'];
                $level = $data['level'];
                $sesdata = array(
                    'username'     => $username,
                    'level'     => $level,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($sesdata);
                // access login for admin
                if($level === '3'){
                    redirect('Dashboard/index');
                }
            }
            else{
                redirect('UserPages/loginpage');
            } 
        } 
        
    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
    }

    // AKSI UPLOAD PADA FORM PANITIA
    public function registpanitia(){
        $this->form_validation->set_rules('name', 'Masukkan Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('nim', 'Masukkan NIM  yang valid', 'trim|required');
        $this->form_validation->set_rules('kelas', 'Masukkan Kelas yang valid', 'trim|required');
        $this->form_validation->set_rules('email', 'Masukkan Alamat Email yang valid', 'trim|required');
        $this->form_validation->set_rules('kontak', 'Masukkan ID Line / Nomor Whatsapp', 'trim|required');
        $this->form_validation->set_rules('divisi', 'Masukkan Divisi Yang Diinginkan', 'trim|required');
        $this->form_validation->set_rules('panitiasdg', 'Masukkan Panitia Sedang Berlangsung', 'trim|required');
        $this->form_validation->set_rules('cv', 'Masukkan Curiculum Vitae (CV)', 'trim');

        if($this->form_validation->run() == FALSE){
            echo validation_errors();
        }
        else{
            $data = $this->Panitia_Model->registpanitia();
                if($data){
                    $response   = [
                        'status'    => [
                            'code'      => 205,
                            'message'   => 'Berhasil Tambahkan Testimoni',
                        ],
                        'response'  => 'Terima kasih banyak atas testimoni yang kamu berikan, 
                        karena ini sangat membantu kami untuk berkembang agar lebih baik !',
                    ];
                    header("Refresh: 3; url=\"panitiapage\"");
                }
                else{
                    $response   = [
                        'status'    => [
                            'code'      => 401,
                            'message'   => 'Gagal ',
                        ],
                        'response'  => 'Kamu akan di alihkan kembali ke halaman Daftar',
                    ];
                    header("Refresh: 3; url=\"refresh\"");
                }
            echo json_encode($response);
        }
    }

    public function delpanitia($id){
        $this->Panitia_Model->delete_panitia($id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil menghapus!</div>'); 
        redirect('UserPages/dashboardpanitia');
    }

    public function formbuka(){
        $id=$this->input->post("id");
        $hidupataumati=$this->input->post("hidupataumati");
        $data = array('hidupataumati'=>$hidupataumati);
        $this->Panitia_Model->update_form($data,$id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil Membuka Form Pendaftaran Panitia !</div>');
        redirect('UserPages/dashboardpanitia');
    }

    public function formtutup(){
        $id=$this->input->post("id");
        $hidupataumati=$this->input->post("hidupataumati");
        $data = array('hidupataumati'=>$hidupataumati);
        $this->Panitia_Model->update_form($data,$id);
        $this->session->set_flashdata('msg',
        '<div class="alert alert-success" role="alert">Berhasil Menutup Form Pendaftaran Panitia !</div>');
        redirect('UserPages/dashboardpanitia');
    }
}
