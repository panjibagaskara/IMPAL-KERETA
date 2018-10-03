<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mriwayat extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function seeRiwayat(){
		
	}
	public function deleteRiwayat($idriwayat){
		$this->db->where('idriwayat', $idriwayat);
		$this->db->delete('riwayat');
	}
}
?>