<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpesan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mjadwal');
		$this->load->model('Mtiket');
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
			$sql = $this->Mjadwal->getStasiun();
			$query['stasiun']['entries'] = $sql->result();
			$this->load->view('Pesan',$query);
		}else{
			redirect($this->config->base_url());
		}
	}
	public function next(){
		if($this->session->has_userdata('username')){
			if (!empty($_GET['stab'])&&!empty($_GET['staj'])&&!empty($_GET['tanggal'])){
				$stab = $_GET['stab'];
				$staj = $_GET['staj'];
				$tanggal = $_GET['tanggal'];
				$this->settingFlashdata($stab,$staj,$tanggal);
				$sql = $this->Mjadwal->cekStasiun($stab,$staj);
				$this->showToJadwal($sql);
			}else{
				redirect($this->config->base_url().'Cpesan');
			}
		}else{
			redirect($this->config->base_url());
		}
	}
	public function settingFlashdata($stab,$staj,$tanggal){
		$this->session->set_flashdata('stab',$stab);
		$this->session->set_flashdata('staj',$staj);
		$this->session->set_flashdata('tanggal',$tanggal);
	}
	public function showToJadwal($sql){
		$date = new DateTime(date("Y-m-d"));
		$date->modify('+1 day');
		if($sql&&(strtotime($_GET['tanggal'])>strtotime($date->format('Y-m-d')))){
			foreach ($sql as $key){
				$id = $key['idstasiun'];
			}
			$jadwal = $this->Mjadwal->seeJadwal($this->session->flashdata('tanggal'),$id);
			if($jadwal->num_rows()>0){
				$hasil['jumkursi'] = array();
				foreach($jadwal->result() as $q){
					$jumkursi = $this->Mtiket->getKursiBooked($q->idjadwal,$q->idkereta,$q->idgerbong);
					array_push($hasil['jumkursi'],$jumkursi->num_rows());
				}
				$hasil['jadwal']['entries'] = $jadwal->result();
				$this->load->view('Jadwal',$hasil);
			}else{
				$this->session->set_flashdata('nodata','Jadwal tidak tersedia');
				$this->load->view('Jadwal');
			}
		}else{
			$this->session->set_flashdata('nodata','Jadwal tidak tersedia');
			$this->load->view('Jadwal');
		}
	}
}
