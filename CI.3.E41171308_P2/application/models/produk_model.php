<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class produk_model extends CI_Model{
	private $_table = "tabel_barang";

	public $id;
	public $nama_barang;
	public $harga_barang;
	public $stok_barang;
	public $deskripsi_barang;
	public $gambar = "default.jpg";

	public function rules()
	{
		return[
			['field' => 'nama_barang',
			'label' => 'Nama Barang',
			'rules' => 'required'],

			['field' => 'harga_barang',
			'label' => 'Harga Barang',
			'rules' => 'required'],

			['field' => 'stok_barang',
			'label' => 'Stok Barang',
			'rules' => 'required'],

			['field' => 'deskripsi_barang',
			'label' => 'Deskripsi Barang',
			'rules' => 'required'],
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function tambah()
	{
		$post = $this->input->post();
		$this->id = uniqid();
		$this->nama_barang = $post["nama_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		$this->gambar = $this->_uploadImage();
		$this->db->insert($this->_table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id = $post["id"];
		$this->nama_barang = $post["nama_barang"];
		$this->harga_barang = $post["harga_barang"];
		$this->stok_barang = $post["stok_barang"];
		$this->deskripsi_barang = $post["deskripsi_barang"];
		if (!empty($_FILES["gambar"]["name"])) {
			$this->gambar = $this->_uploadImage();
		} else {
			$this->gambar = $post["old_image"];
		}

		$this->db->update($this->_table, $this, array('id' => $post['id']));
	}

	public function hapus($id)
	{
		$this->_hapusGambar($id);
		return $this->db->hapus($this->_table, array("id" => $id));
	}

	private function _uploadImage()
	{
		$config['upload_path'] = '.upload/produk';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name'] = $this->id;
		$config['overwrite'] = true;
		$config['max_size'] = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data("file_name");
		}

		return "default.jpg";
	}

	private function _hapusGambar($id)
	{
		$produk = $this->getById($id);
		if ($produk->gambar != "default.jpg") {
			$filename = explode(".", $produk->gambar)[0];
			return array_map('unlink', glob(FCPATH. "upload/produk/$filename.*"));
		}
	
	}

}
