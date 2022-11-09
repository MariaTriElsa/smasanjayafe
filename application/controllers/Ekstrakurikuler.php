<?php

class Ekstrakurikuler extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelEkstrakurikuler");
	}

	public function index()
    {
        $dataEkstrakurikuler = $this->ModelEkstrakurikuler->getAll();
        $data = array(
            "ekstrakurikuler" => $dataEkstrakurikuler
        );
        $this->load->view('content/ekstrakurikuler/v_list_ekstrakurikuler', $data);
    }
}
