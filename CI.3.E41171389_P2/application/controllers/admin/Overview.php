<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
<<<<<<< HEAD
        // load view siswa/overview.php
        $this->load->view("siswa/overview");
=======
        // load view admin/overview.php
        $this->load->view("admin/tampilanawal");
>>>>>>> parent of d1ea2f6... Perbaikan Total
	}
}