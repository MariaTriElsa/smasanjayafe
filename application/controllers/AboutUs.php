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
			"aboutus" => $dataAboutUs
		);
		$this->load->view('header');
		$this->load->view('content/aboutus/v_list_aboutus', $data);
		$this->load->view('footer');
	}
}
