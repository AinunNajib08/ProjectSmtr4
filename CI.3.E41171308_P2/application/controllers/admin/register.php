<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['admin'] = $this->register_model->register_data()->result();
        $this->load->view('admin/register/registrasi', $data);
    }

    public function add(){
        $this->load->view('admin/register/registrasi');
    }

    public function tambahkan(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $nama_lengkap=$this->input->post('nama_lengkap');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $alamat=$this->input->post('alamat');
        $email=$this->input->post('email');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'email' => $email
        );
        $this->register_model->tambah($data, 'admin');
    }

}