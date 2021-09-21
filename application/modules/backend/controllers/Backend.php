<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends MY_Controller {

	function __construct(){
		parent::__construct();
	 	$this->load->model('M_backend');
		if (!$this->ion_auth->logged_in()) {
		redirect('/login');
	}
}

	public function index()

	{
			$data['title'] = 	'Banyuwangi Satu Data';
			$data['layout'] = 'backend/v_backend2';
			$this->load->view('backend/layout_backend', $data);

			// $data = array(
			// 	'title'      =>  'Banyuwangi Satu Data ',
			// 	'layout'     =>  'v_backend2',
			// 	);
			//
			// $this->load->view('backend/layout_backend',$data);
		}


		public function dashboard(){
		$user = $this->ion_auth->user()->row();
		$where = '';
		$where_urusan = '';
		$where_skpd = '';

		if($user->username != 'superadmin'){
				$where = '(a.SKPD_ID = "' . $user->skpd_id . '")';
				$where_urusan = '(c.ID = "' . $user->skpd_id . '")';
				$where_skpd = '(b.SKPD_ID = "'. $user->skpd_id .'")';
		}
		    $data['total_indikator'] = $this->M_backend->total_indikator($user);
	      $data['total_urusan'] = $this->M_backend->total_urusan($where_urusan);
	      $get_keterisian = $this->M_backend->total_terisi($where_skpd);
	        if($get_keterisian){
	            $data['total_terisi'] = $get_keterisian/$data['total_indikator']['total']*100;
	        }else {
	            $data['total_terisi'] = 0;
	        }

	        $this->load->view('backend/dashboard',$data);
	    }

}
