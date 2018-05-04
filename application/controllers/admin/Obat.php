<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

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
		$data['hasil'] = $this->Dbmodel->tampil_obat();
		$this->load->view('admin/obat',$data);
	}
}
