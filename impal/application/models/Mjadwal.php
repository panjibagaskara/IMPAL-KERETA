<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjadwal extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->db->initialize();
	}
	public function getStasiun(){
		$this->db->from('stasiun');
		$query = $this->db->get();
		return $query;
	}
	public function cekStasiun($awal,$akhir){
		$this->db->from('stasiun');
		$where = array(
			'sta_awal' => $awal,
			'sta_akhir' => $akhir
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function seeJadwal($tanggal,$idstasiun){
		$this->db->select('jadwal.idkereta,namakereta,kelas,jumkursi,harga,idjadwal,tanggalberangkat,jamberangkat,jamtiba,idgerbong');
		$this->db->from('jadwal');
		$this->db->join('kereta','jadwal.idkereta = kereta.idkereta');
		$this->db->join('gerbong','kereta.idkereta = gerbong.idkereta');
		$where = array(
			'idstasiun' => $idstasiun,
			'tanggalberangkat' => $tanggal
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
	public function addJadwal($idkereta,$idstasiun,$jamberangkat,$jamtiba,$tanggal,$harga){
		$data = array(
	        'idkereta' => $idkereta,
	        'idstasiun' => $idstasiun,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'tanggalberangkat' => $tanggal,
			'harga' => $harga
		);
		$query = $this->db->insert('jadwal', $data);
		return $query->affected_rows();
	}
}
?>