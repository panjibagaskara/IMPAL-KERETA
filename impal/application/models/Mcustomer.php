<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mcustomer extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function cekLoginCus($username_cus,$password_cus){
		$cek = FALSE;
		$this->db->from('customer');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where($where);
		$query = $this->db->get();
		if ($query->num_rows()){
			$cek = TRUE;
		}
		return $cek;
	}
	public function daftarBaru($username,$password,$email){
		$data = array(
	        'username' => $username,
	        'password' => $password,
	        'email' => $email
		);
		$this->db->insert('customer', $data);
	}
}
?>