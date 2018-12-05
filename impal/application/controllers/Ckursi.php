<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckursi extends CI_Controller {

	private $idjadwal;
	private $idkereta;
	private $idgerbong;

	function __construct(){
		parent::__construct();
		$this->load->model('Mgerbong');
		$this->load->model('Mtiket');
		$this->load->model('Mriwayat');
		$this->setIdJadwal($this->getIdJadwal());
		$this->setIdKereta($this->getIdKereta());
		$this->setIdGerbong($this->getIdGerbong());
	}

	public function setIdJadwal($idjadwal){
		$this->idjadwal = $idjadwal;
	}

	public function setIdKereta($idkereta){
		$this->idkereta = $idkereta;
	}

	public function setIdGerbong($idgerbong){
		$this->idgerbong = $idgerbong;
	}

	public function getIdJadwal(){
		return $_GET['idjadwal'];
	}

	public function getIdKereta(){
		return $_GET['idkereta'];
	}

	public function getIdGerbong(){
		return $_GET['idgerbong'];
	}

	public function index()
	{
		if ($this->session->has_userdata('username')){
			$a = array();
			$_SESSION['idjadwal'] = $this->idjadwal;
			$_SESSION['idkereta'] = $this->idkereta;
			$_SESSION['gerbong'] = $this->idgerbong;
			$sql1 = $this->Mtiket->getKursiBooked($this->idjadwal,$this->idkereta,$this->idgerbong);
			$query['kursi']['entries'] = $sql1->result();
			$this->load->view('Kursi',$query);
		}else{
			redirect($this->config->base_url());
		}
	}
    public function apply(){
		$ktp = $_POST['noktp'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$kursi = $_POST['nokursi'];
		$idjadwal = $_SESSION['idjadwal'];
		if(!empty($ktp)&&!empty($nama)&&!empty($jk)&&!empty($kursi)){
			$idtiket = mt_rand();
			$this->Mtiket->bookingTiket($idtiket,$ktp,$_SESSION['username'],$idjadwal,$nama,$jk,$kursi,$_SESSION['gerbong']);
			$this->Mriwayat->addRiwayat($idtiket);
			redirect($this->config->base_url().'Cpembayaran');
		}
    }
}