<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	/**
	 *
	 *  https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
 	parent::__construct();
 	$this->load->model('Dbkaryawan');
 	}

	public function index()
	{
		$this->load->model('Dbkaryawan');
		$data['hasil'] = $this->Dbkaryawan->tampil_pasien();
		$data['poli'] = $this->Dbkaryawan->tampil_poli();
		$this->load->view('karyawan/pasien',$data);
	}

	function tambah_daftar(){
		$data = array(
			'id_daftar'		=> $this->Dbkaryawan->autonumber('tb_daftar','id_daftar','A'),
			 'id_pasien'		=> $this->input->post('id'),
			 'tanggal'	=> $this->input->post('tanggal'),
			 'id_poli'	=> $this->input->post('poli')
	 );

	 $this->Dbkaryawan->tambah_daftar($data);
	 redirect('karyawan/pasien');


	}

	public function tambah()
	{
		$data = array(
			'id_pasien' => $this->Dbkaryawan->autonumber('tb_pasien','id_pasien','P'),
			 'nama'		=> $this->input->post('nama'),
			 'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			 'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			 'agama'	=> $this->input->post('agama'),
			 'pekerjaan'	=> $this->input->post('pekerjaan'),
			 'alamat'	=> $this->input->post('alamat')
	 );

	 $this->Dbkaryawan->insert_pasien($data);
	 redirect('karyawan/pasien');
	}

	public function ubah_pasien()
	{
		$id=$this->input->post('id');
		$data = array(
			 'nama'		=> $this->input->post('nama'),
			 'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			 'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			 'agama'	=> $this->input->post('agama'),
			 'pekerjaan'	=> $this->input->post('pekerjaan'),
			 'alamat'	=> $this->input->post('alamat')
	 );

	 $this->Dbkaryawan->ubah_pasien($data,$id);
	 redirect('karyawan/pasien');
	}

	function hapus()
	{
		$id_pasien =$this->input->post('id_pasien');
			 $this->Dbkaryawan->delete_pasien($id_pasien);
			$username = $this->Dbkaryawan->delete_pasien($id_user);
		redirect('karyawan/pasien');
	}

	function tampil_poli()
	{
		$poli = $this->Dbkaryawan->tampil_poli();

		$this->load->view('karyawan/pasien',$poli);
		redirect('karyawan/pasien');
	}


	function tampil_ubah_pasien($id)
	{
		$this->Dbkaryawan->tampil_ubah_pasien($id);

		$this->load->view('karyawan/pasien',$ubah);
		redirect('karyawan/pasien');
	}

	function tambah_detail(){


		$this->Dbkaryawan->tambah_detail_rekam_medis();
	}


}
