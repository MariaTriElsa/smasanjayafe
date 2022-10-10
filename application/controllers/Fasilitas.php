<?php

class Fasilitas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelFasilitas");
	}

	public function index()
	{
		$dataFasilitas = $this->ModelFasilitas->getAll();
		$data = array(
			"fasilitas" => $dataFasilitas
		);
		$this->load->view('content/fasilitas/v_list_fasilitas', $data);
	}
}