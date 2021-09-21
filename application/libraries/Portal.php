<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Portal {

    function __construct(){
        $this->CI = & get_instance();
    }

    public function user()
    {
        $id = $this->CI->session->userdata('user_id');
        if ($id) {
            $this->CI->db->select('a.*');
            $this->CI->db->from('users AS a');
            $this->CI->db->where('a.id', $id);
            $query = $this->CI->db->get()->row();
            return $query;
        }
        else {
            return NULL;
        }
    }

    public function opt_unor()
    {
        $id = $this->CI->session->userdata('user_id');
        if ($id) {
            $q = $this->CI->db->query('select c.* from users as c where c.id = ' . $id)->row('opt_unor');
            return $q;
        }
        else {
            return NULL;
        }
    }

    function get_list_skpd()
    {
        $this->CI->db->select('a.ID, a.NAMA_SKPD');
        $this->CI->db->from('m_skpd AS a');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua SKPD';
        foreach ($query as $row):
            $data[$row['ID']] = $row['NAMA_SKPD'];
        endforeach;
        return $data;
    }

    function get_my_skpd()
    {
        $id = $this->CI->ion_auth->user()->row()->id;
        $this->CI->db->select('c.ID AS ID_SKPD, c.NAMA_SKPD');
        $this->CI->db->from('users AS a');
        $this->CI->db->join('users_detail AS b', 'b.id_user = a.id', 'INNER');
        $this->CI->db->join('m_skpd AS c', 'b.kd_skpd = c.KODE_SKPD', 'INNER');
        $this->CI->db->where('a.id', $id);
        $query = $this->CI->db->get()->result_array();
        foreach ($query as $row):
            $data[$row['ID_SKPD']] = $row['NAMA_SKPD'];
        endforeach;
        return $data;
    }

    function get_list_urusan()
    {
        $this->CI->db->select('a.ID, a.KODE_URUSAN, a.URUSAN');
        $this->CI->db->from('m_urusan AS a');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua Urusan';
        foreach ($query as $row) :
            $data[$row['ID']] = '[' . $row['KODE_URUSAN'] . '] ' . $row['URUSAN'];
        endforeach;
        return $data;
    }

    function get_my_urusan()
    {
        $id = $this->CI->ion_auth->user()->row()->id;
        $this->CI->db->select('e.ID, e.URUSAN');
        $this->CI->db->from('users AS a');
        $this->CI->db->join('users_detail AS b', 'b.id_user = a.id', 'INNER');
        $this->CI->db->join('m_skpd AS c', 'b.kd_skpd = c.KODE_SKPD', 'INNER');
        $this->CI->db->join('tx_urusan_ref AS d', 'c.ID = d.SKPD_ID', 'INNER');
        $this->CI->db->join('m_urusan AS e', 'd.URUSAN_ID = e.ID', 'INNER');
        $this->CI->db->where('a.id', $id);
        $this->CI->db->group_by('d.URUSAN_ID');
        $query = $this->CI->db->get()->result_array();
        foreach ($query as $row):
            $data[$row['ID']] = $row['URUSAN'];
        endforeach;
        return $data;
    }

    function filter_kategori()
    {
        $this->CI->db->select('a.ID, a.KATEGORI');
        $this->CI->db->from('m_kategori AS a');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua Kategori';
        foreach ($query as $row):
            $data[$row['KATEGORI']] = $row['KATEGORI'];
        endforeach;
        return $data;
    }

    function get_urusan_spm()
    {
        $this->CI->db->select('a.URUSAN_ID, b.ID, b.KODE_URUSAN, b.URUSAN');
        $this->CI->db->from('tx_spm_sasaran AS a');
        $this->CI->db->join('m_urusan AS b', 'a.URUSAN_ID = b.ID', 'INNER');
        $this->CI->db->group_by('b.ID');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua Urusan';
        foreach ($query as $row):
            $data[$row['ID']] = '[' . $row['KODE_URUSAN'] . '] ' . $row['URUSAN'];
        endforeach;
        return $data;
    }

    function get_list_pilar()
    {
        $this->CI->db->select('a.ID, a.PILAR');
        $this->CI->db->from('tx_sdgs_pilar AS a');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua Pilar';
        foreach ($query as $row):
            $data[$row['ID']] = $row['PILAR'];
        endforeach;
        return $data;
    }

    function filter_tipe()
    {
        $this->CI->db->select('a.ID, a.KATEGORI');
        $this->CI->db->from('m_kategori AS a');
        $query = $this->CI->db->get()->result_array();
        foreach ($query as $row):
            $data[$row['KATEGORI']] = $row['KATEGORI'];
        endforeach;
        return $data;
    }

    function filter_satuan()
    {
        $this->CI->db->select('a.ID, a.SATUAN');
        $this->CI->db->from('m_satuan AS a');
        $this->CI->db->order_by('a.SATUAN', 'ASC');
        $query = $this->CI->db->get()->result_array();
        foreach ($query as $row):
            $data[$row['SATUAN']] = $row['SATUAN'];
        endforeach;
        return $data;
    }

    function periode_tahun()
    {
        $this->CI->db->select('a.ID, a.PERIODE_TAHUN, a.TAHUN_AWAL, a.TAHUN_AKHIR');
        $this->CI->db->from('m_tahun_periode AS a');
        $this->CI->db->order_by('a.ID', 'DESC');
        $query = $this->CI->db->get()->result_array();
        return $query;
    }

    function selected_periode()
    {
        $this->CI->db->select('a.ID, a.PERIODE_TAHUN, a.TAHUN_AWAL, a.TAHUN_AKHIR');
        $this->CI->db->from('m_tahun_periode AS a');
        $this->CI->db->order_by('a.ID', 'DESC');
        $this->CI->db->where('a.PERIODE_TAHUN', $this->CI->session->userdata('periode'));
        $query = $this->CI->db->get()->row();
        return $query;
    }

}

