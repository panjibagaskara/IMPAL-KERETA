<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caddjadwal extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
		$this->load->model('Mkereta');
	}
	public function index()
	{
		if ($this->session->has_userdata('username_ad')){
			$sql = $this->Mjadwal->getStasiun();
			$sql1 = $this->Mkereta->getKereta();
			$query['stasiun']['entries'] = $sql->result();
			$query['kereta']['entries'] = $sql1->result();
			$this->load->view('Addjadwal',$query);
		}else{
			redirect($this->config->base_url().'Calogin');
		}
	}
	public function add(){
		$sql = $this->Mjadwal->addJadwal($_POST['kereta'],$_POST['stasiun'],$_POST['jamb'],$_POST['jamt'],$_POST['tanggal'],$_POST['harga']);
		if($sql){
			$this->session->set_flashdata('success','Jadwal berhasil ditambah');
		}else{
			$this->session->set_flashdata('success','Gagal');
		}
		redirect($this->config->base_url().'Caddjadwal');
	}
}