<<<<<<< HEAD
<?php

class Model_kategori extends CI_Model
{
	public function data_elektronik()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
	}

	public function data_kamera()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'kamera'));
	}

	public function data_hp()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'hp'));
	}

	public function data_aksesoris()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'aksesoris'));
	}
}
=======
<?php

class Model_kategori extends CI_Model
{
	public function data_elektronik()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
	}

	public function data_kamera()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'kamera'));
	}

	public function data_hp()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'hp'));
	}

	public function data_aksesoris()
	{
		return $this->db->get_where("tb_barang", array('kategori' => 'aksesoris'));
	}
}
>>>>>>> 7303622e7d85b5b3ce9b9fd02825ac854c67ac6a
