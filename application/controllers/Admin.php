<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		
		if($this->session->userdata('status')!= "login"){
			redirect(base_url('login'));
		}
	}
	
	public function index(){
		$data['buku'] =  $this->Model_admin->semua('tbl_buku')->num_rows();
		$data['pinjam'] =  $this->Model_admin->semua('tbl_peminjam')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/dashboard');
    $this->load->view('admin/footer');
	} 

	public function buku(){
		$data['hasil']= $this->Model_admin->tampil('tbl_buku')->result();
		$data['title'] = 'Data Buku';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/buku');
    $this->load->view('admin/footer');
	}

	public function Peminjam(){
		$data['hasil']= $this->Model_admin->tampil('tbl_peminjam')->result();
		$data['title'] = 'Data Peminjam';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/peminjam');
    $this->load->view('admin/footer');
	}

	public function tambah(){
		$data['title'] = 'Tambah Buku';
		$this->load->view('admin/header', $data);
    $this->load->view('admin/tambah');
    $this->load->view('admin/footer');
	}

	public function tambah_proses()
	{
		$config['upload_path']          = './assets/gambar';
		$config['allowed_types']        = 'img|png|jpeg|gif|jpg';
		$config['max_size']             = 10000000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
					 $error = array('error' => $this->upload->display_errors());
					 $this->session->set_flashdata('msg', 'Hanya Boleh foto dengan format gambar');
				 	redirect(base_url('admin/tambah'));
	 }else{
					 $data = array('foto' => $this->upload->data());
					 $uploadData = $this->upload->data();
					 $hasil = $uploadData['file_name'];
					 $data = array(
					 'judul' => $this->input->post('judul'),
					 'penerbit' => $this->input->post('penerbit'),
					 'penulis' => $this->input->post('penulis'),
					 'thn_terbit' => $this->input->post('tahun'),
					 'halaman' => $this->input->post('halaman'),
					 'genre' => $this->input->post('genre'),
					 'jumlah_buku' => $this->input->post('jumlah'),
					 'sinopsis' => $this->input->post('sinopsis'),
					 'gambar' => $hasil,
				 );

				 $this->db->insert('tbl_buku',$data);
				 $this->session->set_flashdata('msg',
				 '<div class="alert alert-success alert-has-icon">
				 <div class="alert-icon"><i class="fas fa-check"></i></div>
				 <div class="alert-body">
					 <div class="alert-title">Success</div>
					 Data barang berhasil diinput
				 </div>
				 </div>'
				 );
				 redirect(base_url('admin/buku'));
		}
	}

	function hapus_buku($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_peminjam',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Cucian berhasil dicancel
		</div>
		</div>'
		);
		redirect(base_url('admin/buku'));
	}

	function hapus_peminjam($id)
	{
		$where = array('id'=>$id);
		$this->Model_admin->hapus('tbl_peminjam',$where);
		$this->session->set_flashdata('msg',
		'<div class="alert alert-success alert-has-icon">
		<div class="alert-icon"><i class="fas fa-check"></i></div>
		<div class="alert-body">
			<div class="alert-title">Success</div>
			Cucian berhasil dicancel
		</div>
		</div>'
		);
		redirect(base_url('admin/peminjam'));
	}
}