<?php

class Kontak extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelAboutUs");
	}

	public function index()
	{
		$dataKontak = $this->ModelAboutUs->getLimit();
		$data = array(
			"kontak" => $dataKontak
		);
		$this->load->view('content/kontak/v_list_kontak', $data);
	}
}
