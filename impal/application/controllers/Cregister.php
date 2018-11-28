<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cregister extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mcustomer');
	}
	public function index()
	{
		$this->load->view('Register');
	}
	public function daftar(){
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		$email = $this->input->post('email');
		if (!empty($username)&&!empty($password)&&!empty($email)){
			$cek = $this->Mcustomer->cekUsername($username);
			if ($cek){
				$query = $this->Mcustomer->daftarBaru($username,$password,$email);
				if ($query > 0){
					$this->session->set_flashdata('sukses','Pendaftaran anda berhasil, Silahkan login untuk masuk');
					redirect($this->config->base_url().'Clogin');
				}
			}else{
				$this->session->set_flashdata('gagal','Username sudah digunakan');
				$this->index();
			}
		}
	}
}
