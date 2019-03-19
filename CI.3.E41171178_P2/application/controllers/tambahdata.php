<?php

class tambahdata extends CI_controller
{
    function index()
    {
        $this->load->view("siswa/nav.php");
        $this->load->view("siswa/sidebar-index.php");
        $this->load->view("siswa/index.php");
        $this->load->view("siswa/footer.php");
        $this->load->view("siswa/js.php");
    }
}
