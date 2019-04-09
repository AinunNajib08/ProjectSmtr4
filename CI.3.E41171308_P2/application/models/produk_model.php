<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class produk_model extends CI_Model{
	function produk_data(){
		return $this->db->get('tabel_barang');
	}

	function tambah_produk($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_produk($where,$table){
		$this->db->where($where);
		$this->db->table($table);
	}

	function edit_produk($where,$table){
		return $this->db->get_where($where,$table);
	}
}