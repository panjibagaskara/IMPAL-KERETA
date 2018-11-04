<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('Dashboard');
	}
	public function pesan(){
		$this->load->view('Pesan');
	}
}
