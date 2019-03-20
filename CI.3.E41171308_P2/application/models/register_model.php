<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class register_model extends CI_Model{
    private $_table = "admin";

    public $id;
    public $username;
    public $password;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $alamat;
    public $email;

    public function rules()
    {
        return

    }

}