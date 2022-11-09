<?php

class Organisasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelOrganisasi");
	}

	public function index()
    {
        $dataOrganisasi = $this->ModelOrganisasi->getAll();
        $data = array(
            "organisasi" => $dataOrganisasi
        );
        $this->load->view('content/organisasi/v_list_organisasi', $data);
    }
}
