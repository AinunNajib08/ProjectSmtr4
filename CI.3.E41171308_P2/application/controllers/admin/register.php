<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["admin"] = $this->register_model->getAll();
        $this->load->view("admin/register/registrasi", $data);
    }

    public function add()
    {
        $admin = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());
        
        if ($validation->run()){
            $admin->save();
            $this->session->set_flashdata('success', 'Data Berhasil Tersimpan');
        }
        
        $this->load->view("admin/register/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/register');

        $admin = $this->register_model;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()){
            $admin->update();
            $this->session->set_flashdata('success', 'Data Berhasil Di Update');
        }

        $data["admin"] = $admin->getById($id);
        if (!$data["admin"]) show_404();

        $this->load->view("admin/register/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->register_model->delete($id));{
            redirec(site_url('admin/register'));
        }
    }

}

