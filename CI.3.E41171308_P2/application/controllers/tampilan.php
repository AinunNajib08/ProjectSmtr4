<?php
class tampilan extends CI_controller{
    function home(){
        $this->load->view("Home");
    }
    function informasi(){
        $this->load->view("Informasi");
    }
}
?>
