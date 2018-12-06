<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Mcustomer extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function cekUsername($username){
		$cek = TRUE;
		$this->db->from('customer');
		$this->db->where('username',$username);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$cek = FALSE;
		}
		return $cek;
	}
	public function LoginCus($username_cus,$password_cus){
		$this->db->from('customer');
		$where = array(
			'username' => $username_cus,
			'password' => $password_cus
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
	public function daftarBaru($username,$password,$email){
		$cek = $this->cekUsername($username);
		if($cek){
			$data = array(
				'username' => $username,
				'password' => $password,
				'email' => $email
			);
			$this->db->insert('customer', $data);
			return $this->db->affected_rows();
		}else{
			return -1;
		}
	}
}
?>