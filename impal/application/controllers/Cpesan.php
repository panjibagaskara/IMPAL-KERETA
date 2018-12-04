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
			$this->session->set_flashdata('stab',$stab);
			$this->session->set_flashdata('staj',$staj);
			$this->session->set_flashdata('tanggal',$tanggal);
			$sql = $this->Mjadwal->cekStasiun($stab,$staj);
			if($sql){
				foreach ($sql as $key){
					$id = $key['idstasiun'];
				}
				$jadwal = $this->Mjadwal->seeJadwal($tanggal,$id);
				if($jadwal->num_rows()>0){
					$hasil['jadwal']['entries'] = $jadwal->result();
					$this->load->view('Jadwal',$hasil);
				}else{
					$this->session->set_flashdata('nodata','Jadwal tidak tersedia');
					redirect($this->config->base_url().'Cjadwal');
				}
			}else{
				$this->session->set_flashdata('nodata','Jadwal tidak tersedia');
				redirect($this->config->base_url().'Cjadwal');
			}
		}else{
			redirect($this->config->base_url().'Cpesan');
		}
	}
}
