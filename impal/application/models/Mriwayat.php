<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mriwayat extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function addRiwayat($idtiket){
		$array = array(
			'idtiket' => $idtiket
		);
		$this->db->insert('riwayat',$array);
	}
	public function seeRiwayat($username){
		$this->db->select('idriwayat,namakereta,sta_awal,sta_akhir,tanggalberangkat,harga,idgerbong,noktp,penumpang,kursi,statusbayar');
		$this->db->from('riwayat');
		$this->db->join('tiket','tiket.idtiket = riwayat.idtiket');
		$this->db->join('jadwal','tiket.idjadwal = jadwal.idjadwal');
		$this->db->join('kereta','jadwal.idkereta = kereta.idkereta');
		$where = array(
			'username' => $username
		);
		$query = $this->db->get();
		return $query;
	}
	public function deleteRiwayat($idriwayat){
		$this->db->where('idriwayat', $idriwayat);
		$this->db->delete('riwayat');
	}
}
?>