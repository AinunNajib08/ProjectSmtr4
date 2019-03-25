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
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],
             
            ['field' => 'nama_lengkap',
            'label' => 'nama lengkap',
            'rules' => 'required'],

            ['field' => 'tempat_lahir',
            'label' => 'tempat lahir',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'tanggal lahir',
            'rules' => 'numeric'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'email',
            'laber' => 'email',
            'rules' => 'required'],
            
        ];
    }

    public function getALL()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row()
    }

    public function save()
    {
        $_POST = $this->input->$_POST();
        $this->id = uniqid();
        $this->username = $_POST["username"];
        $this->password = $_POST["password"];
        $this->nama_lengkap = $_POST["nama lengkap"];
        $this->tempat_lahir = $_POST["tempat lahir"];
        $this->tanggal_lahir = $_POST["tanggal lahir"];
        $this->alamat = $_POST["alamat"];
        $this->email = $_POST["email"];
        $this->db->insert($this->_table, $this);

    }

    public function update()
    {
        $_POST = $this->input->$_POST();
        $this->id = uniqid();
        $this->username = $_POST["username"];
        $this->password = $_POST["password"];
        $this->nama_lengkap = $_POST["nama lengkap"];
        $this->tempat_lahir = $_POST["tempat lahir"];
        $this->tanggal_lahir = $_POST["tanggal lahir"];
        $this->alamat = $_POST["alamat"];
        $this->email = $_POST["email"];
        $this->db->update($this->_table, $this, array('id' => $_POST['id']));
    }

    public function delete()
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}