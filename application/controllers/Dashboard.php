<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->model('Dokter_model');
		$this->load->model('Ruangan_model');
		$this->load->model('Poliklinik_model');
        $this->load->library('form_validation');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
        $this->isLogin();
       
	}
	public function isLogin(){
		if($this->session->userdata('login') == TRUE){
			
			$data['pasien'] = $this->Pasien_model->total_rows();
			$data['dokter'] = $this->Dokter_model->total_rows();
			$data['ruangan'] = $this->Ruangan_model->total_rows();
			$data['poliklinik'] = $this->Ruangan_model->total_rows();

			$this->template->load('template', 'dashboard',$data);
		}else {
			redirect('login');
		}

	}

}
