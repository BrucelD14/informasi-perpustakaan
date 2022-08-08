<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
		
		if($this->session->userdata('status')=="login"){
			?>
			<script>
			window.location="<?php echo base_url(); ?>admin";
			</script>
			<?php
		}
		
	}

  public function index()
	{
		$this->load->view('admin/login');
	}

  function proses()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$where = array(
			'username'=>$user,
			'password'=>md5($pass)
		);
		$cek = $this->Model_login->cek_login('tbl_admin',$where)->num_rows();
		$hasil= $this->Model_login->cek_login('tbl_admin',$where)->result();

		if($cek > 0 ){
			foreach ($hasil as $data) {
				$sesi = array(
					'username'=>$user,
					'nama'=>$data->nama,
					'status'=>"login"
					);
			};
			$this->session->set_userdata($sesi);
			?>
			<script>
			window.location="<?php echo base_url(); ?>admin";
			</script>
			<?php
		}else{
			$this->session->set_flashdata('gagal',
			'<div class="alert alert-danger alert-dismissible show fade">
			<div class="alert-body">
			<button class="close" data-dismiss="alert">
				<span>×</span>
			</button>
			UPPSS.. Username atau Password anda salah !!
			</div>
			</div>'
			);
			redirect(base_url('login'));
		}
	}
	
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->session->userdata('status')==" ";
		?>
		<script>
			window.location="<?php echo base_url(); ?>login";
		</script>
		<?php
	} 

}
