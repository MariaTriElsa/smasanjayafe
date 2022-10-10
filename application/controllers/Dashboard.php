<?php

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelFasilitas");
		$this->load->model("ModelBerita");
	}

	public function index()
	{
		$data['fasilitas'] = $this->ModelFasilitas->getAll();
		$data['berita'] = $this->ModelBerita->getLimit();
		$data['faslimit'] = $this->ModelFasilitas->getLimit();
		$this->load->view('content/dashboard/v_list_dashboard', $data);
	}
}
