<?php

class AboutUs extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelAboutUs");
	}

	public function index()
	{
		$dataAboutUs = $this->ModelAboutUs->getAll();
		$data = array(
			"kontak" => $dataAboutUs
		);
		$this->load->view('content/kontak/v_list_kontak', $data);
	}
}
