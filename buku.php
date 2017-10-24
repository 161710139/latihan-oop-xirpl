<?php

class buku
{
	var $judulbuku;
	var $pengarang;
	var $penerbit;
	var $tahun;
}

class orang
{
	var $nama;
	var $tanggal_lahir;
	var $jenis_kelamin;
	var $umur;
	var $alamat;
}

class sekolah
{
	var $kepala_sekolah;
	var $kelas;
	var $jurusan;
	var $siswa;

	function namakepala()
	{
		return "Nama Kepala Sekolah SMK Assalaam adalah Bpk.Lutfi";
	}
	$sekolah = new  sekolah();
	echo $manusia->namakepala;
}
?>