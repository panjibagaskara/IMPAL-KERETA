<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	} 
	public function cekLoginAd($username_ad,$password_ad){
		$this->db->from('admin');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
}
?>