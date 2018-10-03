<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mgerbong extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
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