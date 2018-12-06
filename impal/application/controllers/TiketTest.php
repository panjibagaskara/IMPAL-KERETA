<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiketTest extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Mtiket');
    }

    public function index(){
        echo 'Tiket test';
    }
    
    public function testTiket(){
        $idjadwal = '11';
        $idkereta = 'kereta1';
        $idgerbong = 'APEKO1';
        $result = $this->Mtiket->getKursiBooked($idjadwal,$idkereta,$idgerbong);
        $test_name = "Check Type Generating Kursi Booked";
        echo $this->unit->run($result,'is_object',$test_name);

        $idjadwal = '11';
        $idkereta = 'kereta1';
        $idgerbong = 'APEKO1';
        $result = $this->Mtiket->getKursiBooked($idjadwal,$idkereta,$idgerbong);
        $jadi = $result->result_array();
        $expected_result = 0;
        $test_name = "Check Count Generating Kursi Booked";
        echo $this->unit->run(count($jadi),$expected_result,$test_name);

        $idtiket = '342723423';
        $noktp = '9988146254656';
        $username = 'panjibgskr';
        $penumpang = 'Panji Bagaskara';
        $jk = 'pria';
        $kursi = 'C1';
        $result = $this->Mtiket->bookingTiket($idtiket,$noktp,$username,$idjadwal,$penumpang,$jk,$kursi,$idgerbong,0,0);
        $expected_result = 1;
        $test_name = "Check Add Tiket to DB";
        echo $this->unit->run($result,$expected_result,$test_name);
    }
}
