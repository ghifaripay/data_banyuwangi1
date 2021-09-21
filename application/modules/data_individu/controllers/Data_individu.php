<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_individu extends MY_Controller {

	public function index()

	{
			$data = array(
				'title'      =>  'Banyuwangi Satu Data',
				'layout'     =>  'v_data_individu',
				);
			$this->load->view('default/layout_individu',$data);
		}

		public function Menu_individu(){
			if ($this->input->post('id_data') == 1) {
			 $this->load->view('view_data_pendidikan',true);
			}
		}
}
