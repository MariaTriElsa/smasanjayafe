<?php

class Jurusan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelJurusan");
	}

	public function index()
    {
        $dataJurusan = $this->ModelJurusan->getAll();
        $data = array(
            "jurusan" => $dataJurusan
        );
        $this->load->view('content/jurusan/v_list_jurusan', $data);
    }
}
