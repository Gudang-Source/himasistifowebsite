<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('userPages/home');
	}

	public function panitia(){
		$this->load->view('userPages/panitia');
	}

	public function blog(){
		$this->load->view('userPages/blog');
	}

	public function dokumentasi(){
		$this->load->view('userPages/dokumentasi');
	}

	public function visimisi(){
		$this->load->view('userPages/visimisi');
	}

	public function maknalogo(){
		$this->load->view('userPages/maknalogo');
	}

	public function alumni(){
		$this->load->view('userPages/alumni');
	}

	public function pengurus(){
		$this->load->view('userPages/pengurus');
	}

	public function intikabinet(){
		$this->load->view('userPages/intikabinet');
	}

	public function dewanpresidium(){
		$this->load->view('userPages/dewanpresidium');
	}
	public function depthumas(){
		$this->load->view('userPages/depthumas');
	}

	public function deptkader(){
		$this->load->view('userPages/deptkader');
	}

	public function deptmektif(){
		$this->load->view('userPages/deptmektif');
	}

	public function deptolahraga(){
		$this->load->view('userPages/deptolahraga');
	}

	public function deptristek(){
		$this->load->view('userPages/deptristek');
	}

	public function deptsos(){
		$this->load->view('userPages/deptsos');
	}

	public function kontak(){
		$this->load->view('userPages/kontak');
	}
}
