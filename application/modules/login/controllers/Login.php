<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

  function __construct(){
		parent::__construct();
	 	$this->load->model('M_login');
    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
}

    public function index()
    {
        if ($this->ion_auth->logged_in()) {
            redirect(base_url().'backend/','refresh');
        }
        else {
          $data = array(
            'title'      =>  'Banyuwangi Satu Data',
            'layout'     =>  'v_login2',
            // 'siswa' => $this->M_umum->data_dasar(),
            );

            $this->load->view('frontend/layout_login', $data);
            // redirect(base_url().'masuk/login','refresh');
        }
    }


    public function sign(){
        if($this->ion_auth->logged_in()) {
            redirect(base_url().'backend/','refresh');
        }
        else {
            $data['title'] = 'Login Administrator';
            $this->form_validation->set_rules('username', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == true){
                if ($this->ion_auth->login($this->input->post('username'), $this->input->post('password'))){
                    $output['success'] = true;
                    $output['message'] = $this->ion_auth->messages();
                    $output['url'] = base_url().'backend/';
                    $this->session->set_userdata('periode',$this->input->post('periode'));

                }
                else {
                    $output['success'] = false;
                    $output['message'] = $this->ion_auth->errors();
                }
            }
            else {
                $output['success'] = false;
                $output['message'] = $this->ion_auth->errors();
            }
            echo json_encode($output);
        }
    }

    // public function masuk()
    // {
    //     $data['title'] = 'Administrator Login';
    //     $this->load->view('frontend_login/v_login', $data);
    // }






    public function logout(){
        $data['title'] = 'Logout Administrator';
        if( $this->ion_auth->logout() ){
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            $this->session->unset_userdata('periode');
            redirect('login', 'refresh');
        }else{
            die(lang('logout_failed'));
        }
    }
}
