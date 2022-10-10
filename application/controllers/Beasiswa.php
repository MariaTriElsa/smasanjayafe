<?php

class Beasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBeasiswa");
	}

	public function index()
	{
		$dataBeasiswa = $this->ModelBeasiswa->getAll();
		$data = array(
			"beasiswa" => $dataBeasiswa
		);
		$this->load->view('content/beasiswa/v_list_beasiswa', $data);
	}
}