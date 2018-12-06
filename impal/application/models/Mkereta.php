<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkereta extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function addKereta($idkereta,$namakereta){
		$data = array(
			'idkereta' => $idkereta,
			'namakereta' => $namakereta
		);
		$this->db->insert('kereta',$data);
	}
	public function getKereta(){
		$this->db->from('kereta');
		$query = $this->db->get();
		return $query;
	}
}
?>