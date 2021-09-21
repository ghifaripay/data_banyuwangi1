<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_data extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	// $this->load->model('M_b_data');
}

  public function index()
    {
    			$data = array(
      			'title'      =>  'Banyuwangi Satu Data',
      			'layout'     =>  'v_b_data',

      			);
    			$this->load->view('frontend/layout2',$data);
    }
  }
