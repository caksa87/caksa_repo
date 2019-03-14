<?php
class Biodata extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$data['nama']="Caksa Wintang";
		$data['alamat']="Jl. dr. Sutomo no.22 Pelem - Pare - Kediri";
		$data['gender']="Pria";
		$data['asalsekolah']="SMK TI Pelita Nusantara Kediri";
		$this->load->view('profil',$data);
	}
}
?>