<?php


class Home extends CI_Controller {


	public function index()
	{
		$data['judul'] ='Sistem Informasi Jamkrida';
		$this->load->view('tamplate/navbar');
		$this->load->view('tamplate/sidebar');
		$this->load->view('home', $data);
		$this->load->view('tamplate/footer');

	}
}
