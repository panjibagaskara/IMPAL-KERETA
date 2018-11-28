<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpesan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
	}
	public function index()
	{
		$sql = $this->Mjadwal->getStasiun();
		$query['stasiun']['entries'] = $sql->result();
		$this->load->view('Pesan',$query);
	}
	public function next(){
		if (!empty($_GET['stab'])&&!empty($_GET['staj'])&&!empty($_GET['tanggal'])){
			$stab = $_GET['stab'];
			$staj = $_GET['staj'];
			$tanggal = $_GET['tanggal'];
			$sql = $this->Mjadwal->cekStasiun($stab,$staj);
			if($sql){
				foreach ($sql as $key){
					$id = $key['idstasiun'];
				}
				$jadwal = $this->Mjadwal->seeJadwal($tanggal,$id);
				if($jadwal->num_rows()>0){
					$hasil['jadwal']['entries'] = $jadwal->result();
					$this->load->view('Jadwal',$hasil);
				}
			}
		}
	}
}
