<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgerbong extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getGerbong($idjadwal,$idkereta){
		$this->db->select('idgerbong');
		$this->db->from('jadwal');
		$this->db->join('kereta','jadwal.idkereta = kereta.idkereta');
		$this->db->join('gerbong','kereta.idkereta = gerbong.idkereta');
		$where = array(
			'idjadwal' => $idjadwal,
			'jadwal.idkereta' => $idkereta
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
	public function addGerbong($idgerbong,$idkereta,$kelas,$jumkursi){
		$data = array(
			'idgerbong' => $idgerbong,
			'idkereta' => $idkereta,
			'kelas' => $kelas,
			'jumkursi' => $jumkursi
		);
		$this->db->insert('gerbong',$data);
	}
}
?>