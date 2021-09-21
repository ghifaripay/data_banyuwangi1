<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_backend extends CI_Model{

    // function get_satker_dropdown(){
    //     $this->db->select('a.KD_UNOR, b.NM_UNOR');
    //     $this->db->from('register AS a');
    //     $this->db->join('unor AS b','a.KD_UNOR = b.KD_UNOR','INNER');
    //     $this->db->where('a.is_removed', 0);
    //     $this->db->group_by('a.KD_UNOR, b.KD_UNOR');
    //     $this->db->order_by('a.KD_UNOR','ASC');
    //     $query = $this->db->get()->result_array();
    //     $data[''] = 'Pilih Satuan Kerja';
    //     foreach ($query as $row) {
    //         $data[$row['KD_UNOR']] = $row['NM_UNOR'];
    //     }
    //     return $data;
    // }

    // function get_list_data($where,$where_or,$like,$limit,$offset) {
    //     $this->db->select(' a.ID, a.REGISTERID, a.NIP, a.NIK, a.NAMA_LGKP, a.PANGKAT, a.GOL, a.JABATAN, a.UNIT_KERJA, a.KD_UNOR, a.SATKER, a.KOTA, a.PROVINSI, a.NEGARA, a.EMAIL, a.TELP, a.KODEREF, b.NM_UNOR, a.PASSKODE');
    //     $this->db->from('register AS a');
    //     $this->db->join('unor AS b','a.KD_UNOR = b.KD_UNOR','INNER');
    //     if($where) {
    //         $this->db->where($where);
    //     }
    //     if($where_or) {
    //         $this->db->where($where_or, null, false);
    //     }
    //     if($like) {
    //         $this->db->like($like);
    //     }
    //     $this->db->where('is_removed', 0);
    //     $this->db->order_by('a.ID','DESC');
    //     $this->db->limit($limit, $offset);
    //     return $this->db->get();
    // }

    // function get_list_total($where,$where_or,$like){
    //     $this->db->select('count(*) as count');
    //     $this->db->from('register AS a');
    //     $this->db->join('unor AS b','a.KD_UNOR = b.KD_UNOR','INNER');
    //
    //     if($where) {
    //         $this->db->where($where);
    //     }
    //     if($where_or) {
    //         $this->db->where($where_or, null, false);
    //     }
    //     if($like) {
    //         $this->db->like($like);
    //     }
    //     $this->db->where('is_removed', 0);
    //     return $this->db->get();
    // }

    // function tambah_registrasi($data) {
    //     $query = $this->db->insert('register', $data);
    //     if ($query) {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
    // }

    // function get_detail($nip) {
    //     $this->db->select('a.ID, a.REGISTERID, a.NIP, a.NIK, a.NAMA_LGKP, a.PANGKAT, a.GOL, a.JABATAN, a.UNIT_KERJA, a.KD_UNOR, a.SATKER, a.KOTA, a.PROVINSI, a.NEGARA, a.EMAIL, a.TELP, a.KODEREF, b.NM_UNOR, a.PASSKODE, a.FILE_KTP, a.FILE_REKOM');
    //     $this->db->from('register AS a');
    //     $this->db->join('unor AS b','a.KD_UNOR = b.KD_UNOR','INNER');
    //     $this->db->where('a.NIP', $nip);
    //     return $this->db->get();
    // }


    // function update_pass($data) {
    //     $this->db->where('NIP', $data['NIP']);
    //     $query = $this->db->update('register', $data);
    //     if ($query) {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
    // }

    // function update_data($data) {
    //     $this->db->where('NIP', $data['NIP']);
    //     $query = $this->db->update('register', $data);
    //     if ($query) {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
    // }

    // function get_all(){ // DUMMY
    //     $this->db->select('*');
    //     $this->db->from('register');
    //     $this->db->where('PASSKODE IS NOT NULL');
    //     $query = $this->db->get()->result_array();
    //     return $query;
    // }

    function total_indikator($where){
        $this->db->select('count(a.ID) AS total');
        $this->db->from('tx_indikator_ref AS a');

        if($where){
            $this->db->where($where);
        }

        $query = $this->db->get();
        return $query->row_array();
    }

    function total_urusan($where_urusan){
        $this->db->select('COUNT(b.ID) as total_urusan,b.URUSAN,c.NAMA_SKPD');
        $this->db->from('tx_urusan_ref AS a');
        $this->db->join('m_urusan AS b','a.URUSAN_ID = b.ID','LEFT');
        $this->db->join('m_skpd AS c','a.SKPD_ID = c.ID','LEFT');

        if($where_urusan){
            $this->db->where($where_urusan);
        }

        $query = $this->db->get();
        return $query->row_array();
    }

    function total_terisi($where_skpd){
        $this->db->select('Count( a.INDIKATOR_ID ) AS total_indikator,b.SKPD_ID,a.TAHUN,a.`DATA` ');
        $this->db->from('tx_data_dasar as a');
        $this->db->join('tx_indikator_ref as b','a.INDIKATOR_ID = b.ID');

        if($where_skpd){
            $this->db->where($where_skpd);
        }
        $this->db->where('DATA',NULL);

        $this->db->group_by('INDIKATOR_ID');
        $query = $this->db->get()->num_rows();
        return $query;
    }

}
