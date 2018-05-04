<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

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
		$data['hasil'] = $this->Dbkaryawan->tampil_rawat_karyawan();
		$data['poli'] = $this->Dbkaryawan->tampil_poli();
		$this->load->view('karyawan/rawat',$data);

	}


	function tampil_poli()
	{
		$poli = $this->Dbkaryawan->tampil_poli();

		$this->load->view('karyawan/rawat',$poli);
		redirect('karyawan/rawat');
	}

	function tambah_daftar(){
		$data = array(
			'id_daftar'		=> $this->Dbkaryawan->autonumber('id_daftar','A'),
			 'id_pasien'		=> $this->input->post('id_pasien'),
			 'tanggal'	=> $this->input->post('tanggal'),
			 'poli'	=> $this->input->post('poli')
	 );

	 $this->Dbkaryawan->tambah_daftar($data);
	 redirect('karyawan/pasien');


	}

	function hapus($id_rawat)
	{
			 $this->Dbkaryawan->delete_rawat($id_rawat);
		redirect('karyawan/rawat');
	}


}
