<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends MY_Controller {

	function __construct(){
		parent::__construct();
	 	$this->load->model('M_pengguna');
		if (!$this->ion_auth->logged_in()) {
		redirect('/login');
	}
}

	public function index()

	{
      $users = $this->M_pengguna->users();
			$data = array(
				'title'      =>  'Banyuwangi Satu Data',
				'layout'     =>  'v_pengguna',
        'users'      =>   $users,
 				);

			$this->load->view('default/layout_backend',$data);
		}

		function tambah (){
				 $data = array(
						 'username'  => $this->input->post('Username'),
						 'full_name' => $this->input->post('Nama'),
						 'email' => $this->input->post('Email')
				 );
				 $this->M_pengguna->tambah($data);
				 $this->session->set_flashdata('notif',
				 '<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
		      <span><i class="mdi mdi-check"></i></span>
		      <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
		      </button> Sukses ! Data berhasil masuk.
		      </div>'
				);
				 redirect('master/pengguna');
		 }


		 function ubah (){
			 		$id = $this->input->post('id');
					$data = array(
							'username'  => $this->input->post('username'),
							'full_name' => $this->input->post('full_name'),
							'email' => $this->input->post('email')
					);
					$this->M_pengguna->ubah($id, $data);
					$this->session->set_flashdata('notif',
					'<div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
					 <span><i class="mdi mdi-check"></i></span>
					 <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
					 </button> Sukses ! Data berhasil dirubah.
					 </div>'
				 );
					redirect('master/pengguna');
			}


    // public function skpd()
		//
    // {
    //     $skpd = $this->M_master->skpd();
    //     $data = array(
    //       'title'      =>  'Banyuwangi Satu Data ',
    //       'layout'     =>  'v_skpd',
    //       'skpd'      =>   $skpd,
    //       );
		//
    //     $this->load->view('default/layout_backend',$data);
    //   }
		//
		//
		// 	public function urusan()
		//
		// 	{
		// 			$urusan = $this->M_master->urusan();
		// 			$data = array(
		// 				'title'      =>  'Banyuwangi Satu Data ',
		// 				'layout'     =>  'v_urusan',
		// 				'urusan'      =>   $urusan,
		// 				);
		//
		// 			$this->load->view('default/layout_backend',$data);
		// 		}
		//
		// 		public function satuan()
		//
		// 		{
		// 				$satuan = $this->M_master->satuan();
		// 				$data = array(
		// 					'title'      =>  'Banyuwangi Satu Data ',
		// 					'layout'     =>  'v_satuan',
		// 					'satuan'      =>   $satuan,
		// 					);
		//
		// 				$this->load->view('default/layout_backend',$data);
		// 			}
		//
		// 			public function kategori()
		//
		// 			{
		// 					$kategori = $this->M_master->kategori();
		// 					$data = array(
		// 						'title'      =>  'Banyuwangi Satu Data ',
		// 						'layout'     =>  'v_kategori',
		// 						'kategori'      =>   $kategori,
		// 						);
		//
		// 					$this->load->view('default/layout_backend',$data);
		// 				}
}
