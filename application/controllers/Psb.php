<?php

class Psb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelPsb");
	}

	public function index()
    {
        $dataPsb = $this->ModelPsb->getAll();
        $data = array(
            "psb" => $dataPsb
        );
        $this->load->view('content/psb/v_list_psb', $data);
    }
}
