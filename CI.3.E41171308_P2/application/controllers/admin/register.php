<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller{    
    function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['admin']=$this->register_model->register_data()->result();
        $this->load->view('admin/register/registrasi', $data);
    }

    public function add(){
        $this->load->view('admin/register/registrasi');
    }

    public function tambahkan(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempa Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ( $this->form_validation->run() === FALSE ) {
                $this->load->view('admin/register/registrasi');
        } else {

        $username=$this->input->post('username');
        $password= password_hash($this->input->post('password'), PASSWORD_DEFAULT);
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
        $this->load->view('admin/register/login');
    }

 }

    public function login(){

        $this->load->view('admin/login');
    }

    public function masuk(){

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/login');
        } else {


            $username = $this->input->post('username');
            $cek = $this->register_model->cekusername($username);

            if ( $cek->num_rows() === 1 ) {
                $password = $this->input->post('password');

                if (password_verify($password, $cek->row()->password)){
                    echo 'selamat datang admin';
                } else {
                echo 'username anda salah';
                }
            } else {
            echo 'password anda salah';
        }
      }
    }
}