<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckursi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mgerbong');
		$this->load->model('Mtiket');
	}
	public function index()
	{
		$idjadwal = $_GET['idjadwal'];
		$this->session->set_flashdata('idjadwal',$idjadwal);
		$idkereta = $_GET['idkereta'];
		$sql = $this->Mgerbong->getGerbong($idjadwal,$idkereta);
		$query['gerbong']['entries'] = $sql->result();
		$this->load->view('Kursi',$query);
	}
	public function pilihGerbong(){
		$gerbong = $_GET['gerbong'];
	}
    public function apply(){
		$ktp = $_POST['noktp'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$kursi = $_POST['nokursi'];
		$idjadwal = $this->session->flashdata('idjadwal');
		if(!empty($ktp)&&!empty($nama)&&!empty($jk)&&!empty($kursi)){
			$idtiket = mt_rand();
			$this->Mtiket->bookingTiket($idtiket,$ktp,$_SESSION['username'],$idjadwal,$nama,$jk,$kursi);
			$this->load->view('Pembayaran');
		}
    }
}