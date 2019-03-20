<?php
class admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }
    public function index()
    {
        $this->register();
    }
    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|alpha|min_lenght[3]|max_lenght
        [50]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password]|md5');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required|alpha|min_lenght[3]|max_lenght
        [100]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required|alpha|min_lenght[3]|max_lenght
        [50]');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', '')
    }
}