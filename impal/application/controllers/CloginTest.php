<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CloginTest extends CI_Controller {
    private $test;
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $test = new Clogin();
    }
}
