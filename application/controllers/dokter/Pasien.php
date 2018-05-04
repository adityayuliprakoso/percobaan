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
		$this->load->view('dokter/pasien',$data);
	}

	function detail_rekam()
	{
		$id_pasien = $this->input->get('id_pasien');
    $data = $this->Dbkaryawan->tampil_detail_pasien($id_pasien);

		foreach ($data as $data) {
		 echo '<div id="id_pasien">'.$data->id_pasien.'</div>';
		 echo '<div id="nama">'.$data->nama.'</div>';
		 echo '<div id="tanggal">'.$data->tanggal.'</div>';
		 echo '<div id="periksa">'.$data->periksa.'</div>';
		 echo '<div id="diagnosa">'.$data->diagnosa.'</div>';
		 echo '<div id="tindakan">'.$data->tindakan.'</div>';
	 }
	}





}
