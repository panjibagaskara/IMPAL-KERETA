<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mtiket extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function bookingTiket($idtiket,$noktp,$username,$idjadwal,$statusbayar,$statuscheckin){
		$data = array(
			'idtiket' => $idtiket,
	        'noktp' => $noktp,
	        'username' => $username,
	        'idjadwal' => $idjadwal,
	        'statusbayar' => 0,
	        'statuscheckin' => 0
		);
		$this->db->insert('tiket', $data);
	}
	public function lihatLaporanTiket($tanggal){
		$this->db->select('noktp, namakereta, sta_awal, sta_akhir, jamberangkat, harga');
		$this->db->from('tiket');
		$this->db->join('jadwal', 'jadwal.idjadwal = tiket.idjadwal');
		$this->db->join('kereta','kereta.idkereta = tiket.idkereta');
		$this->db->where('tanggalberangkat',$tanggal);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function boardingPass($idtiket){
		$this->db->set('statuscheckin', 1);
		$this->db->where('idtiket', $idtiket);
		$this->db->update('tiket');
	}
}
?>