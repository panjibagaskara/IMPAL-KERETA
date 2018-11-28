<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			$this->load->view('Adashboard');
		}else{
			redirect($this->config->base_url().'Calogin');
		}
	}
}
