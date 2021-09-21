<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends MY_Controller {

	function __construct(){
		parent::__construct();
	 	// $this->load->model('M_login');
}
	public function index()

	{
			$data = array(
				'title'      =>  'Banyuwangi Satu Data',
				'layout'     =>  'v_beranda2',
				// 'siswa' => $this->M_umum->data_dasar(),
				);

			$this->load->view('frontend/layout2',$data);
		}
}
