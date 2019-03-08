<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		 $this->load->helper('url');
	}

public function index()
	{
		$this->load->view('index');
	}


	public function tentang()
	{
		$this->load->view('tentangkami');
	}

	public function artikel()
	{
		$this->load->view('artikel');
	}

	public function produk()
	{
		$this->load->view('produk');
	}

	public function komen()
	{
		$this->load->view('komen');
	}
	public function pesan()
	{
		$data['nama'] = $this->input->post('nama');
		$data['kom'] = $this->input->post('komen');

		$this->load->view('komen',$data);
		
	}

	public function bantuan()
	{
		$this->load->view('bantuan');
	}

	public function log_in()
	{
		$this->load->view('login');
	}

	public function proseslogin()
	{
		$username = $this->session->userdata('username');
		if($username==""){
			$this->load->view('login');
		}else{
			redirect('login/logout');
		}
	}

	public function ceklogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if($username=="user" && $password=="123"){
			$this->session->set_userdata(array('username'=>$username));
			redirect('Welcome/user');

		}elseif($username=="admin" && $password=="123"){
			$this->session->set_userdata(array('username'=>$username));
			redirect('Welcome/admin');
		}else{
			$pesan = "Login Gagal! Masukkan Data Dengan Benar!";
        echo "<script type='text/javascript'>alert('$pesan'); </script>";
        echo "<meta http-equiv='refresh' content='1;url=log_in'>";
		
		}
	}

	public function user()
	{
		$this->load->view('user');
	}

	public function admin()
	{
		$this->load->view('admin');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome/log_in');
	}

	public function posting()
	{
		$this->load->view('posting');
	}

	public function prosesposting()
	{
		$data['judul'] = $this->input->post('judul');
		$data['status'] = $this->input->post('status');

		$this->load->view('posting',$data);
		
	}


	public function komen_user()
	{
		$this->load->view('komen_user');
	}

	public function proses_komen_user()
	{
		$data['nama'] = $this->input->post('nama');
		$data['komen'] = $this->input->post('komen');

			$this->load->view('komen_user',$data);
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function proses_register(){
		$data['nama_siswa'] = $this->input->post('nama_siswa');
		$data['tempat_lahir'] = $this->input->post('tempat_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['asal_sekolah'] = $this->input->post('asal_sekolah');
		$data['alamat_sekolah'] = $this->input->post('alamat_sekolah');
		$data['kelas'] = $this->input->post('kelas');
		$data['email'] = $this->input->post('email');

		$this->M_data->pendaftaran($data);
		redirect('welcome/user');
	}


	public function artikel_admin()
	{
		$this->load->view('artikel_admin');
	}

	public function tentang_admin()
	{
		$this->load->view('tentang_admin');
	}

	public function bantuan_admin()
	{
		$this->load->view('bantuan_admin');
	}

	public function proses_artikel_admin()
	{

		if( ($data['judul_artikel_admin'] = $this->input->post('judul_artikel_admin')) && ($data['artikel_admin'] = $this->input->post('artikel_admin')));

		$this->load->view('tampil_artikel_admin',$data);

		$pesan = "Posting Berhasil Berhasil! ";
        echo "<script type='text/javascript'>alert('$pesan'); </script>";
        echo "<meta http-equiv='refresh' content='';url=proses_artikel_admin>";
	
	}
	

	public function tampildata(){
		// $data['siswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('data_siswa',$data);
	}




}