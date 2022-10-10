<?php

class Prestasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelPrestasi");
	}

	public function index()
	{
		$dataPrestasi = $this->ModelPrestasi->getAll();
		$data = array(
			"prestasi" => $dataPrestasi
		);
		$this->load->view('content/prestasi/v_list_prestasi', $data);
	}
}