<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function ceklogin($username,$password){
		$this->db->from('admin');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	public function lihattiket($tanggal){
		$this->db->select('noktp, namakereta, sta_awal, sta_akhir, jamberangkat, harga');
		$this->db->from('tiket');
		$this->db->join('jadwal', 'jadwal.idjadwal = tiket.idjadwal');
		$this->db->join('kereta','kereta.idkereta = tiket.idkereta');
		$this->db->where('tanggalberangkat',$tanggal);
		$query = $this->db->get();
		return $query->result_array();
	}
}
