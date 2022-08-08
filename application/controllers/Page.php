<?php
class Page extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_page');
	}
	
	public function index(){
		$data['hasil']= $this->Model_page->tampil('tbl_buku')->result();
    $this->load->view('home', $data);
	} 

	public function detail($id){
		$where = array('id' => $id);
		$data['data'] = $this->Model_page->detail($where,'tbl_buku')->row();
		$this->load->view('detail', $data);
	}

	public function tambah()
	{
		$tgl = $tgl = date("Y-m-d h:i:sa");
		$judul = $_POST['judul'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$hp = $_POST['hp'];
		$alamat= $_POST['alamat'];
		$data = array(
			'tgl_pinjam'=>$tgl,
			'judul'=>$judul,
			'nama'=>$nama,
			'email'=>$email,
			'alamat'=>$alamat,
			'hp'=>$hp
			);
		$this->Model_page->tambah('tbl_peminjam',$data);
		echo $this->session->set_flashdata('msg','tambah');
		redirect(base_url());
	}

}