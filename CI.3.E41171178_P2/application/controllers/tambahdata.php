<?php

class tambahdata extends CI_controller
{
    function index()
    {
        $this->load->view("admin/nav.php");
        $this->load->view("admin/sidebar-tambahdata.php");
        $this->load->view("admin/tambahdata.php");
        $this->load->view("admin/footer.php");
        $this->load->view("admin/js.php");
    }
}
