<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auto_redirect extends CI_Controller
{

	/**
	 * Base_code
	 * DImas Alan Wijaya : dimasalanwijaya007@gmail.com
	 */

	function __construct()
  {
    parent::__construct();
  }

	function index()
	{
		// redirect(base_url('member/landing_page'));
		redirect(base_url('member/login')); // diubah, langsung pindah ke controller member untuk login
	}
}
