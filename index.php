<?php
	class sekolah{
		public $kepalasekolah='Bpk.Luthfi Almanfaluthi';
		public $kelas='XI-RPL 1';
		public $jurusan='RPL';
	}
 	class ayam{
 		public $kaki=2;
 		public $makanan='beras';
 	
 	public function kaki()
 	{
 		return $this->kaki;
 	}
 	}
 	class komputer{
 		public $processor='intel';
 		public $ram=2;
 	public function komputer()
 	{
 		echo $this->processor.'<br>';
 	}
 	}
 	class motor{
 		public $ban=2;
 		public $bensin='pertalite';
 		public $merk='handa';
 		public function merk()
 		{
 			for ($i=0; $i <4 ; $i++) {
 				echo '<br>'.$this->merk.'&nbsp';
 			}
 		}
 	}
 	class rumah{
 		public $type=56;
 		public $jumlahkamar=2; 	
 	}
 	$sekolah = new sekolah();
 	$ayam = new ayam();
 	$komputer = new komputer();
 	$motor = new motor();
 	$rumah = new rumah();

 	echo "Ayam berkaki" .$ayam->kaki();
 	echo $motor->merk();


?>