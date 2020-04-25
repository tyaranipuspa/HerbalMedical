<?php 
/**
 * 
 */
class adminObat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		//load model "M_disease"
		$this->load->model('M_drugs');
		//load library form validation
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['title'] = 'Herbal Medical';
		$data['drugs']['entries'] = $this->M_drugs->getDrugs();
		if ($this->input->post('keyword'))
		{
			$data['drugs'] = $this->M_drugs->searchDrugs();
		}
		$data['active'] = '';
		$data['active2'] = 'active';
		$this->load->view('templates/headerAdmin', $data);
		$this->load->view('viewAdmin/indexobat', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{

		$data['title'] = 'Form Tambah Data Drugs';
		$data['active'] = '';
		$data['active2'] = 'active';
		$this->form_validation->set_rules('code_drugs', 'Code Drugs', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('usability', 'Usability', 'required');
		$this->form_validation->set_rules('making', 'Making', 'required');
		$this->form_validation->set_rules('code', 'Code Disease', 'required');
		// // $this->form_validation->set_rules('foto_drugs', 'Foto Drugs', 'required');

		

		if($this->form_validation->run()==FALSE){
			// var_dump($this->input->post('foto_drugs', true));
			$this->load->view('templates/headerAdmin', $data);
			$this->load->view('viewAdmin/tambahObat');
			$this->load->view('templates/footer');
		}
		else{
			$config['upload_path']          = './upload/';
		    $config['allowed_types']        = 'gif|jpg|png';
		    $config['file_name']            = $this->input->post('code_drugs', true);
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto_drugs')) {
		        $this->M_drugs->tambahDataDrugs();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('adminObat');
		    }else{
		        echo $this->upload->display_errors();
		    }

			
		}
	}

	public function hapus($code_drugs)
	{
		$this->M_drugs->hapusDataDrugs($code_drugs);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('adminObat');
	}

	public function updateDrugs($code_drugs)
	{

		$data['title'] = 'Form Ubah Data Drugs';
		$data['drugs'] = $this->M_drugs->getDrugsbyCode($code_drugs);
		$data['active'] = '';
		$data['active2'] = 'active';

		$test = $this->M_drugs->getDrugsbyCode($code_drugs);

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('usability', 'Usability', 'required');
		$this->form_validation->set_rules('making', 'Making', 'required');
		$this->form_validation->set_rules('code', 'Code Disease', 'required');
		// $this->form_validation->set_rules('foto_drugs', 'Foto Drugs', '');
		if($this->form_validation->run()==FALSE){
			// var_dump('test');
			$this->load->view('templates/headerAdmin', $data);
			$this->load->view('viewAdmin/ubahObat');
			$this->load->view('templates/footer');
		}
		else{
			// var_dump('expression');
			$config['upload_path']          = './upload/';
		    $config['allowed_types']        = 'gif|jpg|png';
		    $config['file_name']            = $this->input->post('code_drugs', true);
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('foto_drugs')) {
		    	// var_dump($this->upload->display_errors());
		        $foto_name = 'upload/'.$this->upload->data("file_name");
		    }else{
		    	// var_dump($this->upload->display_errors());
		        $foto_name = $test['foto_drugs'];
		    }
			$this->M_drugs->updateDrugs($foto_name);
			$this->session->set_flashdata('flash', 'Diubah');
			$this->load->view('templates/headerAdmin');
			$this->load->view('viewAdmin/indexObat');
			$this->load->view('templates/footer');
			redirect('adminObat');
		}
	}

	public function tambah_aksi()
	{
		$data = array(
			'code_drugs' => $this->input->post('code_drugs'),
		);
		if (!empty($_FILES['photo']['code_drugs'])) {
			$upload = $this->_do_upload();
			$data['photo'] = $upload;
		}
		$this->M_drugs->insert($data);
		redirect('adminObat', $data);
	}
 
	private function _do_upload()
	{
		$config['upload_path'] 		= 'assets/images/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size'] 		= 100;
		$config['max_widht'] 		= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 		= round(microtime(true)*1000);
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			redirect('adminObat');
		}
		return $this->upload->data('file_name');
	}
	

}