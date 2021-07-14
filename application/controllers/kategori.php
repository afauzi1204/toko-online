<?php 

class Kategori extends CI_Controller
{
	public function bank_sampah()
	{
		$data['bank_sampah'] = $this->m_kategori->bank_sampah()->result();
		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('bank_sampah', $data);
 		$this->load->view('templates/footer');
	}

	public function kelompok_tani()
	{
		$data['kelompok_tani'] = $this->m_kategori->kelompok_tani()->result();
		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('kelompok_tani', $data);
 		$this->load->view('templates/footer');
	}

	public function kelompok_ternak()
	{
		$data['kelompok_ternak'] = $this->m_kategori->kelompok_ternak()->result();
		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('kelompok_ternak', $data);
 		$this->load->view('templates/footer');
	}

	public function kerajinan()
	{
		$data['kerajinan'] = $this->m_kategori->kerajinan()->result();
		$this->load->view('templates/header');
 		$this->load->view('templates/sidebar');
 		$this->load->view('kerajinan', $data);
 		$this->load->view('templates/footer');
	}
}
?>