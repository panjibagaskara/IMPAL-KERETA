<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cjadwal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			if($this->session->flashdata('stab')&&$this->session->flashdata('staj')&&$this->session->flashdata('tanggal')){
				$this->load->view('Jadwal');
			}else{
				redirect($this->config->base_url().'Cpesan');
			}
		}else{
			redirect($this->config->base_url());
		}
	}
	public function book(){
		$this->load->view('Kursi');
	}
}
