<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Auth {
    public function cek_auth()
	{
		$this->ci =& get_instance();
		$this->sesi   = $this->ci->session->userdata('is_logged_in');
		if($this->sesi != TRUE){
			redirect('/login/','refresh');
			exit();
		}
	}
}