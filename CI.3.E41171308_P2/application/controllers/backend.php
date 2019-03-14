<?php

    class backend extends CI_Controller{
        function admin(){
            $this->load->view("admin/admin");
        }
        function login(){
            $this->load->view("admin/login");
        }
    }