<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function login(){
        $this->load->view('userPages/login');
    }

    public function blog(){
      $this->load->view('otherPages/blog');
    }

    public function userlist(){
      $this->load->view('otherPages/userlist');
    }

    public function panitia(){
      $this->load->view('otherPages/panitia');
    }

    public function dokumentasi(){
      $this->load->view('otherPages/dokumentasi');
    }
    
    public function tentanghima(){
      $this->load->view('otherPages/tentanghima');
    }

    public function strukturkepengurusan(){
      $this->load->view('otherPages/strukturkepengurusan');
    }
    
    public function profilekabinet(){
      $this->load->view('otherPages/profilekabinet');
    }


    public function index(){
      //Allowing akses to author only
      if($this->session->userdata('logged_in') !== TRUE){
        redirect('UserPages/loginpage');
      }
      else if($this->session->userdata('level')==='3'){
        $this->load->view('otherPages/dashboard');
      }
    }

    public function logout(){
        $this->session->sess_destroy();
        sleep(2);
        redirect('Dashboard/login');
    }

}

