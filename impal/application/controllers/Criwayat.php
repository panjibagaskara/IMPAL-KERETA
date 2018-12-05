<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Criwayat extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mriwayat');
	}
	public function index()
	{
		if ($this->session->has_userdata('username')){
            $riwayat = $this->Mriwayat->seeRiwayat($_SESSION['username']);
            $hasil['riwayat']['entries'] = $riwayat->result();
            if($riwayat->num_rows()>0){
                $this->load->view('Riwayat',$hasil);
            }else{
                $this->session->set_flashdata('nodata','Jadwal tidak tersedia');
				$this->load->view('Riwayat');
            }
		}else{
			redirect($this->config->base_url());
		}
	}
	public function delete(){
		$this->Mriwayat->deleteRiwayat($_GET['idriwayat']);
		redirect($this->config->base_url().'Criwayat');
	}
}
