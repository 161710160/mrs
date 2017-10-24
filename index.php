<?php
class identitas{
	public $nama;
	public $tl;
	public $kelas;
	public $status;


	public function __construct(){

	}

	public function set_nama($nama){
		$this-> nama = $nama;
	}
	public function get_nama(){
		return$this-> nama;
	}
	public function set_tl($tl){
		$this-> tl = $tl;
	}
	public function get_tl(){
		return$this-> tl;
	}
	public function set_kelas($kelas){
		$this-> kelas = $kelas;
	}
	public function get_kelas(){
		return$this-> kelas;
	}
	public function set_status($status){
		$this-> status = $status;
	}
	public function get_status(){
		return$this-> status;
	}
}


?>