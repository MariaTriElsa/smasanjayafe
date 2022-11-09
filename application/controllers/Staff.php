<?php

class Staff extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("ModelStaff");
	}

	public function index()
    {
        $dataStaff = $this->ModelStaff->getAll();
        $data = array(
            "staff" => $dataStaff
        );
        $this->load->view('content/staff/v_list_staff', $data);
    }
}
