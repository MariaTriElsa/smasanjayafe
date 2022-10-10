<?php

class Testimoni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelTestimoni");
	}

	public function index()
	{
		$dataTestimoni = $this->ModelTestimoni->getAll();
		$data = array(
			"testimoni" => $dataTestimoni
		);
		$this->load->view('content/testimoni/v_list_testimoni', $data);
	}
}