<?php

class Profil extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelAboutUs");
	}

	public function index()
	{
		$dataProfil= $this->ModelAboutUs->getAll();
		$data = array(
			"aboutus" => $dataProfil
		);
		$this->load->view('content/profil/v_list_aboutus', $data);
	}
}
