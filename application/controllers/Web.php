<?php
class Web extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}

	function index()
	{
		$data['judul']="Parsing data into view";
		$data['isi']="This is data from controller";
		$this->load->view('hello',$data);
	}

	function komentar()
	{
		echo "This is comment function";
	}

	function komentar2()
	{
		echo "This is second comment function";
	}
}
?>