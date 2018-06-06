<?php

  class Vote extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      $this->load->model('M_data');
    }
    public function index(){
      if($this->session->userdata('status') == "login"){
			    redirect(base_url("vote/dashboard"));
		  }
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

      // if($data['senin'] == '09:00-11:00' && $data['selasa'] == '09:00-11:00' && $data['rabu'] == '09:00-11:00' && $data['kamis'] == '09:00-11:00' && $data['jumat'] == '09:00-11:00' && $data['sabtu'] == '09:00-11:00'){
      //   echo "<pre>";
      //   print_r($data);
      //   die();
      // }

      $this->M_data->insert_voted($data);
      $this->M_data->set_status($nim);
      $this->session->sess_destroy();
    	redirect('vote/terimah_kasih');
    }
    public function terimah_kasih(){
      $this->load->view('respon');
    }
  }
