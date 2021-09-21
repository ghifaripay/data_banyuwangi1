<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
	 	// $this->load->model('M_login');
		if (!$this->ion_auth->logged_in()) {
		redirect('/login');
	}
}

	public function portal()

	{
			$data = array(
				'title'      =>  'Banyuwangi Satu Data ',
				'layout'     =>  'v_portal',
				);

			$this->load->view('default/layout_backend',$data);
		}

    public function individu()

    {
        $data = array(
          'title'      =>  'Banyuwangi Satu Data ',
          'layout'     =>  'v_portal',
          );

        $this->load->view('default/layout_backend',$data);
      }

      public function desa()

      {
          $data = array(
            'title'      =>  'Banyuwangi Satu Data ',
            'layout'     =>  'v_portal',
            );

          $this->load->view('default/layout_backend',$data);
        }

        public function api()

        {
            $data = array(
              'title'      =>  'Banyuwangi Satu Data ',
              'layout'     =>  'v_portal',
              );

            $this->load->view('default/layout_backend',$data);
          }
}
