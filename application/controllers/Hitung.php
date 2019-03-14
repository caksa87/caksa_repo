<?php
class Hitung extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		//Load helper URL dan FORM
		$this->load->helper(array('url','form'));
	}

	function index()
	{
		$this->load->view('menu_hitung');
	}

	function penjumlahan()
	{
		$data['angka1']=(float)$this->input->post('angka1',true);
		$data['angka2']=(float)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']+$data['angka2'];
		$this->load->view('penjumlahan',$data);	
	}

	function pengurangan()
	{
		$data['angka1']=(float)$this->input->post('angka1',true);
		$data['angka2']=(float)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']-$data['angka2'];
		$this->load->view('pengurangan',$data);	
	}

	function perkalian()
	{
		$data['angka1']=(float)$this->input->post('angka1',true);
		$data['angka2']=(float)$this->input->post('angka2',true);
		$data['hasil']=$data['angka1']*$data['angka2'];
		$this->load->view('perkalian',$data);	
	}

	function pembagian()
	{
		$data['angka1']=(float)$this->input->post('angka1',true);
		$data['angka2']=(float)$this->input->post('angka2',true);
		if ($data['angka2']>0) {
			$data['hasil']=$data['angka1']/$data['angka2'];
			$this->load->view('pembagian',$data);
		}
		else {
			$data['hasil']='Error, angka2 tidak boleh 0!';
			$this->load->view('pembagian',$data);
		}
	}
}
?>