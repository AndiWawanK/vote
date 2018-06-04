<?php

  class Login extends CI_Controller{
    public function __construct(){
      parent:: __construct();
      $this->load->helper('url');
      $this->load->model('M_data');
    }
    public function index(){
      $respon['response'] = $this->session->flashdata('message');
      // if($respon == 1){
      //   echo $respon;
      // }else{
      //   echo "Respon Tidak Ada";
      // }
      // var_dump($respon);
      // die();
      $this->load->view('login',$respon);
    }

    public function login(){
      $nim  = $this->input->post('nim');
		  $nama = $this->input->post('nama');
  		$where = array(
  			'nim' => $nim
  			);


        // var_dump();
        // die();
        // echo $ambil[0];
        // if($ambil[0] != "Voted"){

          $cek = $this->M_data->cek_login("mahasiswa",$where)->num_rows();

          if($cek > 0){

            $cek_status = $this->M_data->cek_status_vote($nim);
            foreach($cek_status as $key => $cek_vote){
              $cek_status[$key] = (array) $cek_vote;
            }

            $ambil = array_values($cek_status[0]);
            if($ambil[0] != "Voted"){

              $data_session = array(
        				'nama' => $nama,
                'nim' => $nim,
        				'status' => "login"
        				);
                // var_dump($data_session);
                // die();
        			$this->session->set_userdata($data_session);

              // echo "Login Berhasil";
              $this->M_data->update_mhs($nim,$nama);
              // $this->session->set_flashdata('message',$nama);
              redirect(base_url("vote/dashboard"));

            }else{

              $this->session->set_flashdata('message','Anda Sudah Melakukan Vote!');
              redirect("login/index");

            }

      		}else{
            $this->session->set_flashdata('message','Username dan password salah !');
            redirect("login/index");
      		}

        // }else{
        //   // $message = "Anda Sudah Melakukan Vote!"
        //   $this->session->set_flashdata('message','Anda Sudah Melakukan Vote!');
        //   redirect("login/index");
        // }


    }
  }
