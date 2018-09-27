<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {
	public function index()
	{
		$this->load->view('Login');
	}
}
