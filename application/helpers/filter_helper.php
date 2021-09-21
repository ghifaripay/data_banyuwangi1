<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    function filter_urusan(){
        $CI =& get_instance();
        $this->CI->db->select('u.ID, u.KODE_URUSAN, u.URUSAN');
        $this->CI->db->from('t_new_urusan AS u');
        $query = $this->CI->db->get()->result_array();
        $data['all'] = 'Semua Urusan';
        foreach ($query as $row) {
            $data[$row['ID']] = $row['URUSAN'];
        }       
        return $data;
    }

    function num_format($data)
    {
        $length = strlen((string)$data);
        if($length>4){
            $format = number_format($data,2);
        } else {
            $format = number_format($data);
        }
        return $format;
    }

    function rupiah($total)
    {
        return number_format($total,0);
    }


?>