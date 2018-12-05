<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calogin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}
	public function index()
	{
		$this->load->view('Alogin');
	}
	public function login(){
		$username = $this->input->post('uname');
		$password = $this->input->post('pass');
		if(!empty($username)&&!empty($password)){
			$query = $this->Madmin->LoginAd($username,$password);
			if($query->num_rows()>0){
				foreach($query->result() as $key){
					$nama = $key->username;
				}
				if(!empty($nama)){
					$this->session->set_userdata('username_ad',$nama);
					redirect($this->config->base_url().'Cadashboard');
				}
			}else{
				$this->session->set_flashdata('sukses','Username atau password salah.');
				redirect($this->config->base_url().'Calogin');
			}
		}
	}
	public function logout(){
		$this->session->unset_userdata('username_ad');
		$this->session->sess_destroy();
		redirect($this->config->base_url().'Calogin');
	}
}
