<?php
defined('BASEPATH') or ('No direct script acces allowed');

class Product_model extends CI_Model
{
    private $_table = "matakuliah";

    public $kode_matkul;
    public $nama_matkul;
    public $jumlah_sks;
    public $semester;
    public $NIP;

    public function rules()
    {
        return [
            [
                'field' => 'nama_matakuliah',
                'label' => 'Nama_matakuliah',
                'rules' => 'required'
            ],

            [
                'field' => 'jumlah_sks',
                'label' => 'Jumlah_sks',
                'rules' => 'numeric'
            ],

            [
                'field' => 'semester',
                'label' => 'Semester',
                'rules' => 'numeric'
            ],

            [
                'field' => 'nip',
                'label' => 'Nip',
                'rules' => 'required'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByID()
    {
        return $this->db->get_where($this->_table, ["product_id" => $kode_matkul])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode_matkul = uniqid();
        $this->nama_matkul = ["nama_matkul"];
        $this->jumlah_sks = ["jumlah_sks"];
        $this->semester = ["semester"];
        $this->NIP = ["nip"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode_matkul = $post["kode_matkul"];
        $this->nama_matkul = $post["nama_matkul"];
        $this->jumlah_sks = $post["jumlah_sks"];
        $this->semester = $post["semester"];
        $this->NIP = $post["nip"];
        $this->db->update($this->_table, $this, array('kode_matkul' => $post["kode_matkul"]));
    }

    public function delete()
    {
        return $this->db->delete($this->_table, array("kode_matkul" => $kode_matkul));
    }
}
 