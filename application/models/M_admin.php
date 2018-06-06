<?php

  class M_admin extends CI_Model{
    public function get_all_mahasiswa(){
      return $this->db->get('mahasiswa')->result();
    }
    public function get_jml_voted(){
      $this->db->select('status');
      $this->db->from('mahasiswa');
      $this->db->where('status', 'Voted');
      return $this->db->get()->result();
    }
    public function insert_mahasiswa($data){
      $this->db->set('nim', $data['nim']);
      $this->db->set('nama', $data['nama']);
      $this->db->set('prodi', $data['prodi']);
      $this->db->set('status', $data['status']);
      return $this->db->insert('mahasiswa');
    }
    public function get_ti(){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->where('prodi', 'Teknik Informatika');
      return $this->db->get()->result();
    }
    public function get_si(){
      $this->db->select('*');
      $this->db->from('mahasiswa');
      $this->db->where('prodi', 'Sistem Informasi');
      return $this->db->get()->result();
    }
    public function get_voted(){
      $this->db->select('selasa');
      $this->db->from('voted');
      return $this->db->get()->result();
    }
  }
