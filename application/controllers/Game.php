
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Game extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Game_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Game";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['game'] = $this->Game_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("game/vw_game", $data);
		$this->load->view("layout/footer", $data);
	}
	public function tambah()
	{

		$data['judul'] = "Halaman Tambah Game";
		$data['user'] = $this->db->get_where('user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();
		$data['game'] = $this->Game_model->get();
		$this->form_validation->set_rules('nama_game', 'Nama_game', 'required', [
			'required' => 'Nama game Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_pencipta', 'Nama_pencipta', 'required', [
			'required' => 'Nama pencipta Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_penerbit', 'Nama_penerbit', 'required', [
			'required' => 'Nama penerbit Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
        ]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("game/vw_tambah_game", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nama_game' => $this->input->post('nama_game'),
				'nama_pencipta' => $this->input->post('nama_pencipta'),
				'nama_penerbit' => $this->input->post('nama_penerbit'),
				'kategori' => $this->input->post('kategori')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/game/';


				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Game_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Game Berhasil Ditambah!</div>');
			redirect('Game');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Game";
		$data['game'] = $this->Game_model->getById($id);
		$data['user'] = $this->db->get_where('user', [
			'email' =>
				$this->session->userdata('email')
		])->row_array();
		$this->form_validation->set_rules('nama_game', 'Nama_game', 'required', [
			'required' => 'Nama game Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_pencipta', 'Nama_pencipta', 'required', [
			'required' => 'Nama pencipta Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_penerbit', 'Nama_penerbit', 'required', [
			'required' => 'Nama penerbit Wajib di isi'
		]);
		$this->form_validation->set_rules('kategori', 'Kategori', 'required', [
			'required' => 'Kategori Wajib di isi'
        ]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("game/vw_ubah_game", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama_game' => $this->input->post('nama_buku'),
				'nama_pencipta' => $this->input->post('nama_pencipta'),
				'nama_penerbit' => $this->input->post('nama_penerbit'),
				'kategori' => $this->input->post('kategori')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/buku/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['game']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/game/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Game_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Game Berhasil DiUbah!</div>');
			redirect('Game');
		}
	}
	public function hapus($id)
	{
		$this->Game_model->delete($id);
		$error = $this->db->error();
		$this->session->set_flashdata('message', '<div class="alert alert-success"
role="alert">Data Game Berhasil dihapus!</div>');
		redirect('Game');
	}

}
?>