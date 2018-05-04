<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

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
    // $this->auth->ad_restr();
    // $data['sidebar']= 'home';
		$this->load->model('Dbmodel');
		$data['hasil'] = $this->Dbmodel->tampil();
		$this->load->view('admin/pasien', $data);
	}

 public function add_pasien()
 {
 	$this->load->view('admin/tambah_pasien');
 }

	 function tambah_pasien()
	 {$id_ktp=$this->input->post('id_ktp');
	 $nama=$this->input->post('nama');
	 $tgl_lahir=$this->input->post('tgl_lahir');
	 $gender=$this->input->post('gender');
	 $agama=$this->input->post('agama');
	 $pekerjaan=$this->input->post('pekerjaan');
	 $pendidikan=$this->input->post('pendidikan');
	 $alamat=$this->input->post('alamat');

	 $data = array(
			 'id_ktp'=>$id_ktp,
			 'nama'=>$nama,
			 'tgl_lahir'=>$tgl_lahir,
			 'gender'=>$gender,
			 'agama'=>$agama,
			 'pekerjaan'=>$pekerjaan,
			 'pendidikan'=>$pendidikan,
			 'alamat'=>$alamat
				 );
	 $this->Dbmodel->insert_pasien($data);
   $this->load->view('admin/pasien', $data);
 }
	// public function tambah_pasien()
	// {
	// 	// $id_ktp=$this->input->post('id_ktp');
	// 	// $nama=$this->input->post('nama');
	// 	// $tgl_lahir=$this->input->post('tgl_lahir');
	// 	// $gender=$this->input->post('gender');
	// 	// $agama=$this->input->post('agama');
	// 	// $pekerjaan=$this->input->post('pekerjaan');
	// 	// $pendidikan=$this->input->post('pendidikan');
	// 	// $alamat=$this->input->post('alamat');
  //
	// 	$data = array(
	// 			'id_ktp'=>$this->input->post('id_ktp'),
  //       'nama'=>$this->input->post('nama'),
	// 			'tgl_lahir'=>$this->input->post('tgl_lahir'),
	// 			'gender'=>$this->input->post('gender'),
	// 			'agama'=>$this->input->post('agama'),
	// 			'pekerjaan'=>$this->input->post('pekerjaan'),
	// 			'pendidikan'=>$this->input->post('pendidikan'),
	// 			'alamat'=>$this->input->post('alamat')
  //         );
  //  	$this->Dbmodel->tambah_pasien($data);
  //   $this->load->view('admin/pasien');
  //
	// }
	// function delete()
	// {
	// 	$id = $this->input->get('id');
	// 	$delete_pasien = $this->Dbmodel->delete_pasien($id);
	// 	// if ($delete_blog_admin = 200)
	// 	// {
	// 	// 	$msg = 'Success, data berhasil dihapus!';
	// 	// 	redirect(base_url('admin/blog?status=200&msg='.bin2hex($msg)));
	// 	// }
	// 	// else
	// 	// {
	// 	// 	$msg = 'Failed, data gagal dihapus!';
	// 	// 	redirect(base_url('admin/blog?status=500&msg='.bin2hex($msg)));
	// 	// }
  //
	// }
}
