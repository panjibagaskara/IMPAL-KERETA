<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregister extends CI_Controller {
	public function index()
	{
		$this->load->view('Register');
	}
}
