<?php

  class Admin extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      $this->load->model("M_admin");
    }
    public function get_jumlah_mahasiswa(){
      $data = $this->M_admin->get_all_mahasiswa();
      $jml = count($data);
      echo json_encode($jml);
    }
    public function get_mahasiswa_si(){
      $data = $this->M_admin->get_all_mahasiswa_si();
      $jml = count($data);
      echo json_encode($jml);
    }

  }
