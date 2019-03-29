<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("matakuliah_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["matakuliah"] = $this->matakuliah_model->getAll();
        $this->load->view("siswa/tambahdata/list", $data);
    }

    public function add()
    {
        $product = $this->matakuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("siswa/tambahdata");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa/tambahdata');

        $product = $this->matakuliah_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["matakuliah"] = $product->getById($id);
        if (!$data["matakuliah"]) show_404();

        $this->load->view("siswa/tambahdata/edit_form", $data);
    }

    public function delete($kode_matkul = null)
    {
        if (!isset($kode_matkul)) show_404();

        if ($this->matakuliah_model->delete($kode_matkul)) {
            redirect(site_url('siswa/tambahdata'));
        }
    }
}
