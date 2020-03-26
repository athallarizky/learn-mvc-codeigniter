<?php
class ModelCalc extends CI_Model{
	function operationList(){
		$oprList = ["tambah","kali","bagi","kurang"];//isi aray $oprList dengan daftar operasi sesuai soal
		return $oprList;
	}
	function counting($angka1, $angka2, $opr){
		//buat agar hasil berisi operasi antara $angka1 dan $angka2 sesuai inputan operasi
		return $hasil = eval('return ' . $angka1 . $opr . $angka2 . ';');
	}
}
?>