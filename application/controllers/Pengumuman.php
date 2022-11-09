<?php

class Pengumuman extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelPengumuman");
	}

	public function index()
    {
        $dataPengumuman = $this->ModelPengumuman->getAll();
        $data = array(
            "pengumuman" => $dataPengumuman
        );
        $this->load->view('content/pengumuman/v_list_pengumuman', $data);
    }
}
