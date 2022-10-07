<?php

class Berkas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBerkas");
	}

	public function index()
	{
		$dataBerkas = $this->ModelBerkas->getAll();
		$data = array(
			"berkas" => $dataBerkas
		);
		$this->load->view('content/berkas/v_list_berkas', $data);
	}
}
