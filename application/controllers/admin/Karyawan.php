<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	/**
	 *
	 *  https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
 	parent::__construct();
 	$this->load->model('Dbmodel');
 	}

	public function index()
	{
		$this->load->model('Dbmodel');
		$data['hasil'] = $this->Dbmodel->tampil_karyawan();
		$this->load->view('admin/karyawan',$data);
	}

	public function tambah()
	{
		$data = array(
			 'nama'		=> $this->input->post('nama'),
			 'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			 'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			 'agama'	=> $this->input->post('agama'),
			 'pekerjaan'	=> $this->input->post('pekerjaan'),
			 'alamat'	=> $this->input->post('alamat')
	 );

	 $this->Dbmodel->insert_pasien($data);
	 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 redirect('kar');
	}

}
