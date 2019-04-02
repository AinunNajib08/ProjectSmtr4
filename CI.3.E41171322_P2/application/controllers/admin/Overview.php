<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // load view siswa/overview.php
        $this->load->view("siswa/overview");
	}
}
?>