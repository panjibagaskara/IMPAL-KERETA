<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstasiun extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function addStasiun($idstasiun,$sta_awal,$sta_akhir){
		$data = array(
			'idstasiun' => $idstasiun,
			'sta_awal' => $sta_awal,
			'sta_akhir' => $sta_akhir
		);
		$this->db->insert('stasiun',$data);
	}
}
?>