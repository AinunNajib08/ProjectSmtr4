<?php
class tampilan extends CI_controller{
    function home(){
        $this->load->view("Home");
    }
    function informasi(){
        $this->load->view("Informasi");
    }
}

class backend extends CI_Controller{
    function admin(){
        $this->load->view("admin/admin.php")
    }
}
?>
