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
        $data['tabel_barang']=$this->produk_model->produk_data()->result();
        $this->load->view('admin/admin', $data);
    }

    public function addproduk()
    {
        $this->load->view('admin/admin');
    }

    public function tambah()
    {
        $nama_barang=$this->input->post('nama_barang');
        $harga_barang= $this->input->post('harga_barang');
        $stok_barang=$this->input->post('stok_barang');
        $deskripsi_barang=$this->input->post('deskripsi_barang');
        $gambar=$this->input->post('gambar');

        $data = array(
            'nama_barang' => $nama_barang,
            'harga_barang' => $harga_barang,
            'stok_barang' => $stok_barang,
            'deskripsi_barang' => $deskripsi_barang,
            'gambar' => $gambar
        );
    }

    public function vadmin()
    {
        $this->load->view('admin/viewadmin.php');
    }
}