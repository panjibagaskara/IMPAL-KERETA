<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpembayaran extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			$this->load->view('Pembayaran');
		}else{
			redirect($this->config->base_url().'Calogin');
		}
	}
}
