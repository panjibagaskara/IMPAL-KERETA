<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalTest extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('unit_test');
        $this->load->model('Mjadwal');
    }

    public function index(){
        echo 'Jadwal test';
    }
    
    public function testJadwal(){
        $result = $this->Mjadwal->getStasiun();
        $test_name = "Check Type Generating Stasiun";
        echo $this->unit->run($result,'is_object',$test_name);

        $awal = 'Bandung';
        $akhir = 'Bekasi';
        $result = $this->Mjadwal->cekStasiun($awal,$akhir);
        $test_name = "Check Type Generating Stasiun By Depart and Arrived";
        echo $this->unit->run($result,'is_array',$test_name);

        $awal = 'Bandung';
        $akhir = 'Bekasi';
        $result = $this->Mjadwal->cekStasiun($awal,$akhir);
        $jadi = count($result);
        $expected_result = 1;
        $test_name = "Check Count of Array Generating Stasiun By Different Depart and Arrived";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $tanggal = strtotime('2018-12-09');
        $idstasiun = 'stasiun1';
        $result = $this->Mjadwal->seeJadwal($tanggal,$idstasiun);
        $test_name = "Check Type Generating Jadwal";
        echo $this->unit->run($result,'is_object',$test_name);

        $tanggal = '2018-12-09';
        $idstasiun = 'stasiun1';
        $result = $this->Mjadwal->seeJadwal($tanggal,$idstasiun);
        $jadi = $result->num_rows();
        $expected_result = 1;
        $test_name = "Check Count Generating Jadwal in DB";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $awal = 'Bandung';
        $akhir = 'Bandung';
        $result = $this->Mjadwal->cekStasiun($awal,$akhir);
        $jadi = count($result);
        $expected_result = 0;
        $test_name = "Check Count of Array Generating Stasiun By Same Depart and Arrived";
        echo $this->unit->run($jadi,$expected_result,$test_name);

        $idkereta = 'kereta1';
        $jamb = '10:00:00';
        $jamt = '13:00:00';
        $harga = 80000;
        $result = $this->Mjadwal->addJadwal($idkereta,$idstasiun,$jamb,$jamt,$tanggal,$harga);
        $expected_result = 1;
        $test_name = "Check Add Jadwal to DB";
        echo $this->unit->run($result,$expected_result,$test_name);
    }
}
