<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	/**
	 *
	 *  https://codeigniter.com/user_guide/general/urls.html
	 */
  //  function __construct()
  //  {
  //    parent::__construct();
  //    $this->auth = new Auth();
  //  }
	public function index()
	{
    // $this->auth->ad_restr();
    // $data['sidebar']= 'home';
		$this->load->view('dokter/profil');
	}
}
