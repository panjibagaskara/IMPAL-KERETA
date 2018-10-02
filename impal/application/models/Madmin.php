<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function cekLogin($username,$password){
		$this->db->from('admin');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	public function lihatTiket($tanggal){
		$this->db->select('noktp, namakereta, sta_awal, sta_akhir, jamberangkat, harga');
		$this->db->from('tiket');
		$this->db->join('jadwal', 'jadwal.idjadwal = tiket.idjadwal');
		$this->db->join('kereta','kereta.idkereta = tiket.idkereta');
		$this->db->where('tanggalberangkat',$tanggal);
		$query = $this->db->get();
		return $query->result_array();
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
	public function boardingPass($idtiket){
		$this->db->set('statuscheckin', 1);
		$this->db->where('idtiket', $idtiket);
		$this->db->update('tiket');
	}
}
