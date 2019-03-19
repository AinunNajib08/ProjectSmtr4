<?php

    class backend extends CI_Controller{
        function admin(){
            $this->load->view("siswa/siswa");
        }
        function login(){
            $this->load->view("siswa/login");
        }
    }