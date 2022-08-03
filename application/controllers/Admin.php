<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class Admin extends CI_Controller{
  public function index(){
    $this->load->view('admin/login');
  }

  public function login(){
    $this->load->view('admin/login_v');
	}

  public function data_soal(){
    $this->load->view('admin/data_soal_v');
	}
  
  public function kelola_soal(){
    $this->load->view('admin/kelola_soal_v');
	}

  
}