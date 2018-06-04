<?php

  class M_admin extends CI_Model{
    public function get_all_mahasiswa(){
      return $this->db->get('mahasiswa')->result();
    }
    public function get_all_mahasiswa_si(){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->where('prodi', 'Teknik Informatika');
      return $this->db->get()->result();
    }
  }
