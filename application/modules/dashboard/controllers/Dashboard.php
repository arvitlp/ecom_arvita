<?php
class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_barang->find($id);
		$data = array(
			'id'      	=> $barang->id_brg,
			'qty'     	=> 1,
			'price'   	=> $barang->harga,
			'name'    	=> $barang->nama_brg

		);

		$this->cart->insert($data);
		redirect(base_url("index.php/dashboard"));
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect(base_url("index.php/dashboard"));
	}

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '2') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Silahkan Login!
		 </div>');
			redirect('auth/login');
		}
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pemesanan()
	{
		$is_proses = $this->model_invoice->index();
		if ($is_proses) {
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pemesanan');
			$this->load->view('templates/footer');
		} else {
			echo "Maaf pesanan anda gagal diproses!";
		}
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
<<<<<<< HEAD
=======
	 }
	public function search()
	{

		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->model_barang->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
>>>>>>> 7303622e7d85b5b3ce9b9fd02825ac854c67ac6a
	}
}
