<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjadwal extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function seeJadwal(){
		
	}
	public function addJadwal($idjadwal,$idkereta,$idstasiun,$jamberangkat,$jamtiba,$tanggal,$harga){
		$data = array(
	        'idjadwal' => $idjadwal,
	        'idkereta' => $idkereta,
	        'idstasiun' => $idstasiun,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'tanggalberangkat' => $tanggal,
			'harga' => $harga
		);
		$this->db->insert('jadwal', $data);
	}
}
?>