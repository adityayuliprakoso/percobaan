<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
			$this->load->view('login');
	}

	function aksi_login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'password' => $password
				);
				$cek = $this->Dbkaryawan->cek_login("tb_login",$where)->num_rows();
				$login = $this->Dbkaryawan->tampil_data_login($username);
		if($cek > 0){

				$result=$this->Dbkaryawan->tampil_id_dokter($username);
				$pengguna=$result->username;

				$data_session = array(
					'username' => $username,
					'nama' => $result->nama,
					'id_dokter' => $result->id_dokter,
					'id_pasien' => "",
					'no_rekam' => "",
					'posisi' => $login->posisi,
					'status' => "login",

					// 'id_poli' => $result->tb_jenis_poli.d_jenis_poli,
					'poli' => $result->nama_poli,
					);

// $data['hasil']['posisi']
				$this->session->set_userdata($data_session);
				echo $login->posisi;
				// $this->session->set_flashdata('posisi', $login->posisi);
// $this->session->userdata('status') != "login"

// if($this->session->userdata('posisi') == "dokter"){
// // redirect(base_url("dokter"));
//
//
// 			}else
// 							{
// 									redirect(base_url("karyawan"));
// 							}


			}

			else{
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}

		function autonumber(){
			$kolom = $this->input->post('kolom');
			$awalan = $this->input->post('awalan');

			$autonumber = $this->Dbkaryawan->autonumber($kolom,$awalan);
			echo $autonumber;
		}



}
