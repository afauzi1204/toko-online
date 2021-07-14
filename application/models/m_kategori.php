<?php 

class M_kategori extends CI_Model
{
	
	public function bank_sampah()
	{
		return $this->db->get_where("tb_barang", array('kategori'=>'bank sampah'));
	}

	public function kelompok_tani()
	{
		return $this->db->get_where("tb_barang", array('kategori'=>'kelompok tani'));
	}

	public function kelompok_ternak()
	{
		return $this->db->get_where("tb_barang", array('kategori'=>'kelompok ternak'));
	}

	public function kerajinan()
	{
		return $this->db->get_where("tb_barang", array('kategori'=>'kerajinan'));
	}
}
?>