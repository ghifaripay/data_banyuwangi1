<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_sektoral extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	$this->load->model('M_data_sektoral');
}

  public function index()
    {
    			$data = array(
      			'title'      =>  'Banyuwangi Satu Data',
      			'layout'     =>  'v_data_sektoral',

      			);
    			$this->load->view('default/layout_sektoral',$data);
    }

    public function search(){
      // Ambil data yang dikirim via ajax post
      $keyword = $this->input->post('keyword');
      if ($keyword == null) {
      $keyword = "....." ;
      }
      $keyword2  = $keyword;
      $indikator = $this->M_data_sektoral->search($keyword2);

      // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
      $hasil = $this->load->view('view_cari_data',
       array (
         'data_dasar'=> $indikator,
         'indikator' => $keyword2
        ), true);

      // Buat sebuah array
      $callback = array(
        'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
      );
      echo json_encode($callback); // konversi varibael $callback menjadi JSON
    }

    public function Menu_data(){
      $tipe_data = $this->input->post('tipe_data');
      $menu = $this->M_data_sektoral->data_menu($tipe_data);
      $filter = $this->M_data_sektoral->filter_menu($tipe_data);
      $filter_kec = $this->M_data_sektoral->filter_menu_kec();
      // $filter = $this->M_data_sektoral->filter_menu_kec($tipe_data);
      // $filter_data= $this->input->post('urusan');

          if ($tipe_data==1) {
            $hasil = $this->load->view('v_menu_bps',
            array(
              'data_menu'=> $menu,
              'filter_menu'=> $filter,
            ), true);

             $callback = array(
                 'hasil' => $hasil,
             );
             echo json_encode($callback);

          } elseif ($tipe_data==2) {
            $hasil = $this->load->view('v_menu_sektoral',
            array(
              'data_menu'=> $menu,
              'filter_menu'=> $filter,
            ), true);

             $callback = array(
                 'hasil' => $hasil,
             );
             echo json_encode($callback);
          } elseif ($tipe_data==3) {
            $hasil = $this->load->view('v_menu_kecamatan',
            array(
              'data_menu'=> $menu,
              'filter_menu'=> $filter,
              'filter_kecamatan'=>$filter_kec,
            ), true);

             $callback = array(
                 'hasil' => $hasil,
             );
             echo json_encode($callback);
          }
    }

    public function filter_menu_bps(){
      $tipe_data = 1 ;
      $filter = $this->M_data_sektoral->filter_menu($tipe_data);
      $filter_data= $this->input->post('urusan');
      $menu = $this->M_data_sektoral->filter_menu_bps($tipe_data, $filter_data);
      $hasil = $this->load->view('v_menu_bps',
      array(
        'data_menu'=> $menu,
        'filter_menu'=> $filter,
      ), true);

       $callback = array(
           'hasil' => $hasil,
       );
       echo json_encode($callback);
    }

    public function filter_menu_sektoral(){
      $tipe_data = 2 ;
      $filter = $this->M_data_sektoral->filter_menu($tipe_data);
      $filter_data= $this->input->post('urusan');
      $menu = $this->M_data_sektoral->filter_menu_sektoral($tipe_data, $filter_data);
      $hasil = $this->load->view('v_menu_sektoral',
      array(
        'data_menu'=> $menu,
        'filter_menu'=> $filter,
      ), true);

       $callback = array(
           'hasil' => $hasil,
       );
       echo json_encode($callback);
    }

    public function filter_menu_kecamatan(){
      $tipe_data = 3 ;
      $filter = $this->M_data_sektoral->filter_menu($tipe_data);
      $filter_kec = $this->M_data_sektoral->filter_menu_kec();
      $filter_data_kec = $this->input->post('kecamatan');
      $filter_data_urusan_kec = $this->input->post('urusan');
      $menu = $this->M_data_sektoral->filter_menu_kecamatan($tipe_data, $filter_data_kec, $filter_data_urusan_kec);
      $hasil = $this->load->view('v_menu_kecamatan',
      array(
        'data_menu'=> $menu,
        'filter_menu'=> $filter,
        'filter_kecamatan'=>$filter_kec,
      ), true);

       $callback = array(
           'hasil' => $hasil,
       );
       echo json_encode($callback);
    }

}
