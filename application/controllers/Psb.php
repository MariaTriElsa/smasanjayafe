<?php

class Psb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelPsb");
		$this->check_login();
		if ($this->session->userdata('id_role') != "1") {
			redirect('', 'refresh');
		}
	}

	public function index()
    {
        $dataPsb = $this->ModelPsb->getAll();
        $data = array(
            "psb" => $dataPsb
        ); 
        $this->load->view('header');
        $this->load->view('content/psb/v_list_psb', $data);
        $this->load->view('footer');
    }
}
