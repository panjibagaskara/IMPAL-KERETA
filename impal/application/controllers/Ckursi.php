<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckursi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Mgerbong');
	}
	public function index()
	{
		$idjadwal = $_GET['idjadwal'];
		$idkereta = $_GET['idkereta'];
		$sql = $this->Mgerbong->getGerbong($idjadwal,$idkereta);
		$query['gerbong']['entries'] = $sql->result();
		$this->load->view('Kursi',$query);
	}
	public function pilihGerbong(){
		$gerbong = $_GET['gerbong'];
	}
    public function apply(){
        $this->load->view('Pembayaran');
    }
}