<?php
    class tampilan extends CI_controller{
        function index(){
            $this->load->view("siswa/nav.php");
            $this->load->view("siswa/sidebar.php");
            $this->load->view("siswa/dashboor.php");
            $this->load->view("siswa/footer.php");
            $this->load->view("siswa/js.php");


        }
    }
?>