<?php

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelFasilitas");
		$this->load->model("ModelBerita");
		$this->load->model("ModelAboutUs");
		$this->load->model("ModelJurusan");
		$this->load->model("ModelTestimoni");
	}

	public function index()
	{
		$data['aboutus'] = $this->ModelAboutUs->getLimit();
		$data['fasilitas'] = $this->ModelFasilitas->getAll();
		$data['berita'] = $this->ModelBerita->getLimit();
		$data['faslimit'] = $this->ModelFasilitas->getLimit();
		$data['jurusan'] = $this->ModelJurusan->getAll();
		$data['testimoni'] = $this->ModelTestimoni->getAll();
		$this->load->view('content/dashboard/v_list_dashboard', $data);
	}
}
