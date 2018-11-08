<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpesan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal')
	}
	public function index()
	{
		$this->load->view('Pesan');
	}
	public function next(){
		$stab = $_POST['stab'];
		$staj = $_POST['staj'];
		$tanggal = $_POST['tanggal'];
		$orang = $_POST['orang'];
		$data = $this->Mjadwal->seeJadwal($stab,$staj,$tanggal,$orang);
		$this->load->view('Jadwal',$data);
	}
}
