<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class register_model extends CI_Model{
    function register_data(){
        return $this->db->get('admin');
    }

    function tambah($data,$table){
            $this->db->insert($table,$data);
    }

    function hapus($where,$table){
            $this->db->where($where);
            $this->db->hapus($table);
    }

    function ubah($where,$table){
        return $this->db->get_where($table,$where);
    }


}