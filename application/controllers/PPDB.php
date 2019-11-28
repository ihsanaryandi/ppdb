<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PPDB extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model('PPDB_Model', 'ppdb');

	}

	public function index()
	{
		$data['judul'] = 'SMKN 2 Kota Bandung';

		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		$this->load->view('templates/header', $data);
		$this->load->view('ppdb/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function pendaftar()
	{
		$data['judul'] = 'Data Pendaftar Calon Siswa';

		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		$data['pendaftar'] = $this->ppdb->getPendaftar();

		// $this->session->unset_userdata('siswa');

		$this->load->view('templates/header', $data);
		$this->load->view('ppdb/pendaftar', $data);
		$this->load->view('templates/footer', $data);

	}

	public function daftar()
	{
		
		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		
		if($this->session->userdata('siswa'))
		{
			$data['siswa'] = $this->ppdb->getSiswa($this->session->userdata('siswa'));
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Harap Login Terlebih Dahulu
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>');
			redirect('ppdb/pendaftar');
			exit;
		}

		$data['judul'] = 'Pendaftaran Online SMKN 2 Bandung';

		$this->load->view('templates/header', $data);
		$this->load->view('ppdb/daftar', $data);
		$this->load->view('templates/footer', $data);

	}

	public function register($nisn = null)
	{

		$siswa = $this->ppdb->getSiswa($nisn);

		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		if($siswa)
		{
			$data['siswa'] = $siswa;
		}
		else
		{
			redirect('ppdb/pendaftaran');
			exit;
		}

		$data['judul'] = 'Registrasi Akun';

		$this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[akun.email]', [
			'required' => 'Email tidak boleh kosong',
			'valid_email' => 'Email tidak valid',
			'is_unique' => 'Email sudah terdaftar'
		]);

		$this->form_validation->set_rules('password', '', 'required|min_length[3]|matches[repeat_password]', [
			'required' => 'Password tidak boleh kosong',
			'min_length' => 'Password terlalu pendek',
			'matches' => 'Password harus sama dengan konfirmasi password'
		]);

		$this->form_validation->set_rules('repeat_password', '', 'matches[password]');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('ppdb/register', $data);
			$this->load->view('templates/footer', $data);
		}
		else
		{

			$this->ppdb->register($siswa['nisn']);

			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Registrasi Berhasil!</strong> Silahkan login
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>');
			
			redirect('ppdb/pendaftar');

		}

	}

	public function login()
	{
		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		$data['judul'] = 'Login';

		$this->load->view('templates/header', $data);
		$this->load->view('ppdb/login', $data);
		$this->load->view('templates/assets', $data);

	}

	public function login_process()
	{

		if($this->input->post())
		{

			$email = htmlspecialchars($this->input->post('email'));
			$password = htmlspecialchars($this->input->post('password'));

			$dataDB = $this->db->get_where('akun', ['email' => $email])->row_array();

			if($dataDB)
			{

				if(password_verify($password, $dataDB['password']))
				{

					$this->session->set_userdata('siswa', $dataDB['nisn']);
					redirect('ppdb/pendaftar');
					
				}
				else
				{

					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Email atau Password Salah
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>');
					redirect('ppdb/login');

				}

			}
			else
			{

				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Email atau Password Salah
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
				redirect('ppdb/login');

			}

		}

	}

	public function daftar_proses()
	{

		if($this->input->post('nisn'))
		{

			$this->ppdb->daftar($this->input->post('nisn'));

		}
		else
		{

			redirect('ppdb/pendaftar');
			exit;

		}

		if($this->session->userdata('siswa'))
		{
			$data['foto'] = $this->ppdb->getSiswa($this->session->userdata('siswa'))['foto'];
		}

		$data['judul'] = 'Daftar Berhasil!';

		$this->load->view('templates/header', $data);
		$this->load->view('ppdb/daftar_proses', $data);
		$this->load->view('templates/assets', $data);

	}

	public function coming_soon()
	{

		$this->load->view('ppdb/coming_soon');

	}

}
