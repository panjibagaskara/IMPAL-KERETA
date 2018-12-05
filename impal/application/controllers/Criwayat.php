<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criwayat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mriwayat');
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			$this->load->view('Riwayat');
		}else{
			redirect($this->config->base_url());
		}
	}
}
