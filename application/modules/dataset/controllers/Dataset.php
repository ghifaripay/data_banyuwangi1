<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataset extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	// $this->load->model('M_b_data');
}

  public function index()
    {
    			$data = array(
      			'title'      =>  'Banyuwangi Satu Data',
      			'layout'     =>  'v_dataset',

      			);
    			$this->load->view('frontend/layout2',$data);
    }

    public function dtl_i()
      {
            $data = array(
              'title'      =>  'Banyuwangi Satu Data',
              'layout'     =>  'v_dataset_dtl_i',

              );
            $this->load->view('frontend/layout2',$data);
      }

      public function dtl_v()
        {
              $data = array(
                'title'      =>  'Banyuwangi Satu Data',
                'layout'     =>  'v_dataset_dtl_v',

                );
              $this->load->view('frontend/layout2',$data);
        }
  }
