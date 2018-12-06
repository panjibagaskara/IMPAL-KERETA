<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerTest extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Mcustomer');
    }

    public function index(){
        echo 'Login test';
    }
    
    public function testcekUsername(){
        $username = 'panjibgskr';
        $result = $this->Mcustomer->cekUsername($username);
        $expected_result = FALSE;
        $test_name = "Check Username in DB";
        echo $this->unit->run($result,$expected_result,$test_name);

        $password = '12345678';
        $result = $this->Mcustomer->LoginCus($username,$password);
        foreach ($result->result() as $key){
            $username = $key->username;
        }
        $expected_result = 'panjibgskr';
        $test_name = "Check Username By Password";
        echo $this->unit->run($username,$expected_result,$test_name);

        $username = 'panjibgskr';
        $password = '12345678';
        $result = $this->Mcustomer->LoginCus($username,$password);
        $jadi = $result->num_rows();
        $expected_result = 1;
        $test_name = "Check Login with Both Exist";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $password = '1234567';
        $result = $this->Mcustomer->LoginCus($username,$password);
        $jadi = $result->num_rows();
        $expected_result = 0;
        $test_name = "Check Login with Username Exist and Password Doesn't Exist";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $username = 'alfisar';
        $password = '12345678';
        $result = $this->Mcustomer->LoginCus($username,$password);
        $jadi = $result->num_rows();
        $expected_result = 0;
        $test_name = "Check Login with Username Doesn't Exist and Password Exist";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $username = 'alfisar';
        $password = '1234567';
        $result = $this->Mcustomer->LoginCus($username,$password);
        $jadi = $result->num_rows();
        $expected_result = 0;
        $test_name = "Check Login with Both Doesn't Exist";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $email = 'alfisar589@gmail.com';
        $result = $this->Mcustomer->daftarBaru($username,$password,$email);
        $expected_result = 1;
        $test_name = "Register with Username Doesn't Exist";
        echo $this->unit->run($result,$expected_result,$test_name);

        $email = 'alfisar589@gmail.com';
        $result = $this->Mcustomer->daftarBaru($username,$password,$email);
        $expected_result = -1;
        $test_name = "Register with Username Exist";
        echo $this->unit->run($result,$expected_result,$test_name);
    }
}
