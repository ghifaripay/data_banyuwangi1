<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model{

    public function users(){
      $this->db->select('a.id,a.username,a.full_name,a.email,a.active');
      $this->db->from('users as a');
      $query = $this->db->get();
    return $query->result_array();
   }

   public function tambah($data){
     $this->db->insert('users', $data);
     return TRUE;
   }

   public function ubah ($id, $data){
     // $this->db->select('*');
     // $this->db->from('users');
     $this->db->where('id', $id);
     $this->db->update('user', $data);
     return TRUE;
   }

//    public function skpd(){
//      $this->db->select('a.KODE_SKPD,a.NAMA_SKPD');
//      $this->db->from('m_skpd as a');
//      // $this->db->where('a.tipe_data', 1);
//      $query = $this->db->get();
//    return $query->result_array();
//   }
//
//   public function urusan(){
//     $this->db->select('a.KODE_URUSAN,a.URUSAN');
//     $this->db->from('m_urusan as a');
//     // $this->db->where('a.tipe_data', 1);
//     $query = $this->db->get();
//   return $query->result_array();
//  }
//
//  public function satuan(){
//    $this->db->select('a.KODE_SATUAN,a.SATUAN');
//    $this->db->from('m_satuan as a');
//    // $this->db->where('a.tipe_data', 1);
//    $query = $this->db->get();
//  return $query->result_array();
// }
//
// public function kategori(){
//   $this->db->select('a.KATEGORI');
//   $this->db->from('m_kategori as a');
//   // $this->db->where('a.tipe_data', 1);
//   $query = $this->db->get();
// return $query->result_array();
// }
}

?>
