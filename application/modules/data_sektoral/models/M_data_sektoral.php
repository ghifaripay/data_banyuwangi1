<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_sektoral extends CI_Model{

  public function search($keyword2){
    $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
    $this->db->from('data as a');
    $this->db->like('indikator', $keyword2);
    // $this->db->where('a.tipe_data', 1);
    $this->db->where('a.tipe_data', 2);
    $query = $this->db->get();
  return $query->result_array();
 }

 public function data_menu($tipe_data){

     if ($tipe_data == 3) {
       $this->db->select('a.indikator,a.sub_indikator,ref_kecamatan.kecamatan,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
       $this->db->from('data as a');
       $this->db->where('a.tipe_data', $tipe_data);
        $this->db->join('ref_kecamatan','a.kecamatan = ref_kecamatan.id');
        $query = $this->db->get();
       return $query->result_array();
     }
     $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
     $this->db->from('data as a');
     $this->db->where('a.tipe_data', $tipe_data);
     $query = $this->db->get();
    return $query->result_array();
}

public function filter_menu($tipe_data){
  $this->db->select('a.id,a.URUSAN,a.makro,a.sektoral,a.kecamatan');
  $this->db->from('m_urusan as a');
  if ($tipe_data == 1) {
    $this->db->where('a.makro', 1);
  } if ($tipe_data == 2) {
    $this->db->where('a.sektoral', 1);
  } if ($tipe_data == 3) {
    $this->db->where('a.kecamatan', 1);
  }
  $query = $this->db->get();
  return $query->result_array();
 }

 public function filter_menu_kec(){
   $this->db->select('a.id,a.kecamatan');
   $this->db->from('ref_kecamatan as a');
   $query = $this->db->get();
   return $query->result_array();
 }

 public function filter_menu_bps($tipe_data, $filter_data){
     if ($filter_data == "all") {
       $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
       $this->db->from('data as a');
       $this->db->where('a.tipe_data', $tipe_data);
       $query = $this->db->get();
      return $query->result_array();
     }
       $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
       $this->db->from('data as a');
       $this->db->where('a.tipe_data', $tipe_data);
       $this->db->where('a.kategori', $filter_data);
       $query = $this->db->get();
      return $query->result_array();
   }

public function filter_menu_sektoral($tipe_data, $filter_data){
    if ($filter_data == "all") {
      $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
      $this->db->from('data as a');
      $this->db->where('a.tipe_data', $tipe_data);
      $query = $this->db->get();
     return $query->result_array();
    }
      $this->db->select('a.indikator,a.sub_indikator,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
      $this->db->from('data as a');
      $this->db->where('a.tipe_data', $tipe_data);
      $this->db->where('a.kategori', $filter_data);
      $query = $this->db->get();
     return $query->result_array();
  }

  public function filter_menu_kecamatan($tipe_data, $filter_data_kec, $filter_data_urusan_kec){
    $this->db->select('a.indikator,a.sub_indikator,ref_kecamatan.kecamatan,a.tipe_data,a.kategori,a.th2013,a.th2014,a.th2015,a.th2016,a.th2017,a.th2018,a.th2019,a.th2020,a.satuan_data,a.sumber_data');
    $this->db->from('data as a');
    $this->db->where('a.tipe_data', $tipe_data);
    if ($filter_data_kec != "all") {
      $this->db->where('a.kecamatan', $filter_data_kec);
    }if ($filter_data_urusan_kec != "all") {
    $this->db->where('a.kategori', $filter_data_urusan_kec);
    }
    $this->db->join('ref_kecamatan','a.kecamatan = ref_kecamatan.id');
    $query = $this->db->get();
   return $query->result_array();
  }
}

?>
