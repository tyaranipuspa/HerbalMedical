<?php
 // write your name and student id here
class Penyakit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//load model "M_disease"
		$this->load->model('M_disease');
		//load library form validation
		$this->load->library('form_validation');
	}


	public function index()
	{
		//echo 'keluarin kata-kata';
		$data['judul'] = 'Daftar Penyakit';
		$data['name'] = $this->session->userdata('log');
		$data['disease']= $this->M_disease->getDisease();
		// if($this->input->post('keyword')){
		// 	$data['disease'] = $this->M_disease->cariDataPenyakit();
		// }
		if ($this->input->post('search')) {
			$data['disease'] = $this->M_disease->searchDisease();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('viewAdmin/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		

		$data['judul'] = 'Form Tambah Data Penyakit';
		$this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('prevention', 'Prevention', 'required');
		if($this->form_validation->run()==FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('viewAdmin/tambah');
			$this->load->view('templates/footer');
		}
		else{
			$this->M_disease->tambahDataPenyakit();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('penyakit');
		}

	}

	public function hapus($code)
	{
		//call method hapusDataPenyakit with parameter id from m_disease
		//use flashdata to show alert "dihapus"
		//back to controller mahasiswa
		$this->M_disease->hapusDataPenyakit($code);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('penyakit');

	}

	public function ubah($code)
	{
		// var_dump($id);
		$data['judul'] = 'Form Ubah Data Penyakit';
		$data['penyakit'] = $this->M_disease->getPenyakitBycode($code);
		// $this->form_validation->set_rules('code', 'Code', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('prevention', 'Prevention', 'required');

		if($this->form_validation->run()==FALSE){
			// var_dump('test');
			$this->load->view('templates/header', $data);
			$this->load->view('viewAdmin/ubah');
			$this->load->view('templates/footer');
		}
		else{
			// var_dump('expression');
			$this->M_disease->ubahDataPenyakit();
			$this->session->set_flashdata('flash', 'Diubah');
			$this->load->view('templates/header');
			$this->load->view('viewAdmin/index');
			$this->load->view('templates/footer');
			redirect('penyakit');
		}
	}
}
