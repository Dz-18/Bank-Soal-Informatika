<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class User extends CI_Controller{
  public function index(){
    $this->load->view('beranda_v');
  }

  public function beranda(){
    $this->load->view('beranda_v');
	}

  public function download_soal(){
    $this->load->view('download_soal_v');
	}
  
  public function upload_soal(){
    $this->load->view('upload_soal_v');
	}
}