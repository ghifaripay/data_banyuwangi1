<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

  function sign_on($username, $password){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get();
      if ($query) {
          return $query->row_array();
      }
      else {
          return false;
      }
  }
}

?>
