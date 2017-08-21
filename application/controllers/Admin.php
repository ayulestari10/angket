<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Karya_model');

		$username = $this->session->userdata('username');
		if (!isset($username)) {
		   redirect('Login/Admin');
		   exit;
		}
	}

	function index(){
		$data = array(
			'dt'		=> $this->Karya_model->get_all(),
			'title'		=> 'Manage | Karya Ilkom',
			'content'	=> 'Admin_area'
		);
		$this->load->view('includes/template', $data);
	}

	function edit(){
		$id_karya = $this->uri->segment(3);
		$data = array(
			'title' 		=> 'Edit Karya Ilkom | BEM KM Fasilkom',
			'content'		=> 'edit',
			'dt' 				=> $this->Karya_model->get_data_byId($id_karya)
		);
		$this->load->view('includes/template',$data);
	}

	function edit_karya(){
		$id_karya = $this->uri->segment(3);
		if(isset($id_karya)){
			if($this->input->post('edit')){
				$input = array (
					'nama'						=> $this->input->post('nama'),
					'nim'							=> $this->input->post('nim'),
					'jurusan'					=> $this->input->post('jurusan'),
					'angkatan'				=> $this->input->post('angkatan'),
					'nama_karya'			=> $this->input->post('nama_karya'),
					'kategori_karya'	=> $this->input->post('kategori_karya'),
					'jenis_karya'			=> $this->input->post('jenis_karya'),
					'img_karya'				=> $this->input->post('userfile'),
					'detail_karya'		=> $this->input->post('detail_karya')
				);
				$this->Karya_model->update($id_karya, $input);
				$this->Karya_model->do_upload($id_karya);
				$this->session->set_flashdata('msg', '<div class="alert alert-success" style="text-align:center;">Data berhasil disimpan!</div>');
				redirect('Admin/edit_karya/'.$id_karya);
				exit;
			}
			$data = array(
				'title' 		=> 'Edit Karya Ilkom | BEM KM Fasilkom',
				'content'		=> 'edit',
				'dt' 				=> $this->Karya_model->get_data_byId($id_karya)
			);
			$this->load->view('includes/template',$data);

		} else {
			redirect('Admin');
		}
	}



	function delete(){
		$id_karya = $this->uri->segment(3);
		if(isset($id_karya)){
			$this->Karya_model->delete($id_karya);
		} else {
			redirect('Admin');
		}
		redirect('Admin');
	}
}
 ?>
