<?php

class Berita extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelBerita");
	}

	public function index()
	{
		$dataBerita = $this->ModelBerita->getAll();
		$data = array(
			"berita" => $dataBerita
		);
		$this->load->view('content/berita/v_list_berita', $data);
	}
}
