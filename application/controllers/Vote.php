<?php

  class Vote extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      $this->load->model('M_data');
    }
    public function index(){
      $this->load->view('home');
    }
    public function dashboard(){
      if($this->session->userdata('status') != "login"){
			    redirect(base_url("login"));
		  }
      $this->load->view('dashboard');
    }
    public function vote_proccess($nim){
      $data = array(
        'nim'     => $nim,
        'senin'   => $this->input->post('senin'),
        'selasa'  => $this->input->post('selasa'),
        'rabu'    => $this->input->post('rabu'),
        'kamis'   => $this->input->post('kamis'),
        'jumat'   => $this->input->post('jumat'),
        'sabtu'   => $this->input->post('sabtu')
      );
      $this->M_data->insert_voted($data);
    }
  }
