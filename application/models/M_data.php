<?php

  class M_data extends CI_Model{
    public function cek_login($table,$where){
      return $this->db->get_where($table,$where);
    }
    public function update_mhs($nim,$nama){
      $this->db->set('nama', $nama);
      $this->db->where('nim', $nim);
      return $this->db->update('mahasiswa');
    }
    public function cek_status_vote($nim){
      $sql = "SELECT status FROM mahasiswa WHERE nim = '$nim'";
      $query = $this->db->query($sql);
      return $query->result();
      // $this->db->select('status');
      // $this->db->from('mahasiswa');
      // $this->db->where('nim', $nim);
      // return $this->db->get()->result();
      // echo "<pre>";
      // print_r($this->db->get()->result());
      // echo "</pre>";
    }
    public function insert_voted($data){
      $this->db->set('nim', $data['nim']);
      $this->db->set('senin', $data['senin']);
      $this->db->set('selasa', $data['selasa']);
      $this->db->set('rabu', $data['rabu']);
      $this->db->set('kamis', $data['kamis']);
      $this->db->set('jumat', $data['jumat']);
      $this->db->set('sabtu', $data['sabtu']);
      return $this->db->insert('voted');
    }
    public function set_status($nim){
      $this->db->set('status', 'Voted');
      $this->db->where('nim', $nim);
      return $this->db->update('mahasiswa');
    }
  }
