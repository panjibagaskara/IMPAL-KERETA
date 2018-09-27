<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function ceklogin($username,$password){
		$this->db->from('customer');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function daftarbaru($username,$password,$email){
		$data = array(
	        'username' => $username,
	        'password' => $password,
	        'email' => $email
		);
		$this->db->insert('customer', $data);
	}
	public function deleteriwayat($idriwayat){
		$this->db->where('idriwayat', $idriwayat);
		$this->db->delete('riwayat');
	}
	public function pesan($noktp,$username,$idjadwal,$statusbayar,$statuscheckin){
		$data = array(
	        'noktp' => $noktp,
	        'username' => $username,
	        'idjadwal' => $idjadwal,
	        'statusbayar' => 0,
	        'statuscheckin' => 0
		);
		$this->db->insert('tiket', $data);
	}
}
