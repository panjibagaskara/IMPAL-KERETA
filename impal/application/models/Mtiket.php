<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mtiket extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function bookingTiket($idtiket,$noktp,$username,$idjadwal,$penumpang,$jk,$kursi,$idgerbong){
		$data = array(
			'idtiket' => $idtiket,
	        'username' => $username,
			'idjadwal' => $idjadwal,
			'idgerbong' => $idgerbong,
			'noktp' => $noktp,
			'penumpang' => $penumpang,
			'jk' => $jk,
			'kursi' => $kursi,
	        'statusbayar' => 0,
	        'statuscheckin' => 0
		);
		$this->db->insert('tiket', $data);
		return $this->db->affected_rows();
	}
	public function getKursiBooked($idjadwal,$idkereta,$idgerbong){
		$this->db->select('kursi');
		$this->db->from('tiket');
		$this->db->join('jadwal','tiket.idjadwal = jadwal.idjadwal');
		$this->db->join('kereta','jadwal.idkereta = kereta.idkereta');
		$where = array(
			'tiket.idjadwal' => $idjadwal,
			'jadwal.idkereta' => $idkereta,
			'tiket.idgerbong' => $idgerbong
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
}
?>