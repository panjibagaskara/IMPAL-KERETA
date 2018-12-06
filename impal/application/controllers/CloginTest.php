<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CloginTest extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Mcustomer');
    }

    public function index(){
        echo 'Login test';
    }
    
    public function testcekUsernameExist(){
        $username = 'panjibgskr';
        $result = $this->Mcustomer->cekUsername($username);
        $expected_result = FALSE;
        $test_name = "tes cek username yang ada di db";
        echo $this->unit->run($result,$expected_result,$test_name);
    }

    public function testcekUsernameDoesntExist(){
        $username = 'alfisar';
        $result = $this->Mcustomer->cekUsername($username);
        $expected_result = TRUE;
        $test_name = "tes cek username yang ada di db";
        echo $this->unit->run($result,$expected_result,$test_name);
    }
}
