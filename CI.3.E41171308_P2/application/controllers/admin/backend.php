<?php

    class backend extends CI_Controller{
        function admin(){
            $this->load->view("admin/admin");
        }
        function login(){
            $this->load->view("admin/login");
        }
        function registrasi(){
            $this->load->view("admin/register/registrasi");
        }
        function forgot(){
            $this->load->view("admin/forgotpass"); 
        }

    }
?>