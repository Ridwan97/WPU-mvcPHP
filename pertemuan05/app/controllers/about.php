<?php 
class about {

	public function index($nama = 'Ridwan', $pekerjaan = 'Programmer')
	{
		echo "Hallo, Nama Saya $nama , Saya Adalah seorang $pekerjaan";
	}

	public function page()
	{
		echo 'About/page';
	}
}