<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_desa extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	$this->load->model('M_data_desa');
}

  public function index()
    {
    			$data = array(
      			'title'      =>  'Banyuwangi Satu Data',
      			'layout'     =>  'v_data_desa',

      			);
    			$this->load->view('default/layout_desa',$data);
    }
  }
