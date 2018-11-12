<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cjadwal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
	}
	public function index()
	{
		$this->load->view('Jadwal');
	}
	public function book(){
		$this->load->view('Kursi');
	}
}
