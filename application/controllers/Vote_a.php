<?php

  //admin
  class Vote_a extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      $this->load->model("M_admin");
      $this->load->helper('url');
      $this->load->helper(array('form'));
      $this->load->library('form_validation');
    }

    public function index(){

    }

    public function dashboard(){
      $data['ti'] = count($this->M_admin->get_ti());
      $data['all'] = count($this->M_admin->get_all_mahasiswa());
      $data['si'] = count($this->M_admin->get_si());
      $data['voted'] = count($this->M_admin->get_jml_voted());
      //  $data['selasa'] = $this->M_admin->get_voted();
      //
      // echo "<pre>";
      // print_r($data);
      // die();

      $this->load->view('admin/templates/header');
      $this->load->view('admin/dashboard',$data);
      $this->load->view('admin/templates/footer');
    }
    public function add_mahasiswa(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/add_mahasiswa');
      $this->load->view('admin/templates/footer');
    }
    public function insert_mhs(){
      $this->form_validation->set_rules('nim', 'Nim', 'trim|required|min_length[9]|max_length[10]');
      $this->form_validation->set_rules('prodi', 'Prodi', 'required');

      $nim = $this->input->post('nim');
      $prodi = $this->input->post('prodi');

      if($this->form_validation->run() == FALSE){
        $data = array(
          'nim' => $nim,
          'nama' => 'Anonymous',
          'prodi' => $prodi,
          'status' => 'Not yet Vote'
        );

        $this->M_admin->insert_mahasiswa($data);
        redirect('vote_a/add_mahasiswa');
      }else{
        echo "Gagal menambah data";
      }
    }
    public function teknik_informatika(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/mahasiswa_ti');
      $this->load->view('admin/templates/footer');
    }
    public function sistem_informasi(){
      $this->load->view('admin/templates/header');
      $this->load->view('admin/mahasiswa_si');
      $this->load->view('admin/templates/footer');
    }
    public function get_ti(){
      $data = $this->M_admin->get_ti();
      echo json_encode($data);
    }
    public function get_si(){
      $data = $this->M_admin->get_si();
      echo json_encode($data);
    }

  }
