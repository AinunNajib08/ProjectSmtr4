<?php

    class backend extends CI_Controller{
        function admin(){
            $this->load->view("siswa/siswa");
        }
        function login(){
            $this->load->view("siswa/login");
        }
        function registrasi(){
            $this->load->view("admin/registrasi");
        }
        function forgot(){
            $this->load->view("admin/forgotpass"); 
        }

    }
?>