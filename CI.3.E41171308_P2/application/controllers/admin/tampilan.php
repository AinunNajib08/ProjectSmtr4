<?php
class tampilan extends CI_Controller{
    function home(){
        $this->load->view("home");
    }
    function informasi(){
        $this->load->view("informasi");
    }
}
?>