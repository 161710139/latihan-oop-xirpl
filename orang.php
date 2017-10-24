<?php
class sekolah
{
	var $kepala_sekolah;
	var $kelas;
	var $jurusan;
	var $siswa;

	function namakepala()
	{
		return "Nama Kepala Sekolah SMK Assalaam adalah Bpk.Lutfi <br>";
	}
	function tampilkan_siswa()
	{
		$nama='ujang';
		return "Nama saya adalah ".$nama."<br>";
	}
	function kelas();
} 
	$sekolah = new sekolah();
	echo $sekolah->namakepala();
	echo $sekolah->tampilkan_siswa();
?>