<?php

class tambahdata extends CI_controller{
    function index(){
        $this->load->view("admin/nav.php");
        $this->load->view("admin/sidebar.php");
        $this->load->view("admin/dashboor.php");
            $this->load->view("admin/footer.php");
            $this->load->view("admin/js.php");
    }
}

class data extends CI_controller{
    function index(){
        $this->load->view("admin/nav.php");
        $this->load->view("admin/sidebar.php");
        $this->load->view("admin/dashboor.php");
            $this->load->view("admin/footer.php");
            $this->load->view("admin/js.php");
    }
}
?>