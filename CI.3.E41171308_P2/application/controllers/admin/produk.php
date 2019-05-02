<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk extends CI_Controller{    
    function __construct()
    {
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['tabel_barang']=$this->produk_model->getAll();
        $this->load->view('admin/viewadmin', $data);
    }

    public function addproduk()
    {
        $this->load->view('admin/admin');

    }

    public function tambah()
    {
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->save();
            $this->session->set_flashdata('success', 'data berhasil tersimpan');
        }

        $this->load->view("admin/admin");
    }
}