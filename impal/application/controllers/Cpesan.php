<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpesan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
	}
	public function index()
	{
		$this->load->view('Pesan');
	}
	public function next(){
		if (!empty($_POST['stab'])&&!empty($_POST['staj'])&&!empty($_POST['tanggal'])){
			$stab = $_POST['stab'];
			$staj = $_POST['staj'];
			$tanggal = $_POST['tanggal'];
			$data = $this->Mjadwal->seeJadwal($stab,$staj,$tanggal);
			$this->load->view('Jadwal',$data);
		}
	}
}
