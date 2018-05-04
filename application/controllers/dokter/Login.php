<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 *
	 *  https://codeigniter.com/user_guide/general/urls.html
	 */
  //  function __construct()
  //  {
  //    parent::__construct();
  //    $this->auth = new Auth();
  //  }
	function __construct()
  {
    parent::__construct();
  }

	function index()
	{
		$this->load->view('dokter/login');
	}

	function action()
	{
		$auth = new Auth();
		$this->form_validation->set_rules('login_username', 'Username', 'trim|required|min_length[3]|max_length[25]|callback_valid_username');
		$this->form_validation->set_rules('login_password', 'Password', 'trim|required|min_length[6]|max_length[50]|callback_valid_number_text');
		if ($this->form_validation->run() == false)
		{
			$msg = $auth->get_message('2');
			redirect(base_url('admin/login?page=login&status=500&msg='.bin2hex($msg)));
		}
		else
		{
			$username = $_POST['login_username'];
			$password = $_POST['login_password'];
			$login_proc = $auth->login_admin($username, $password);
			$msg = $auth->get_message($login_proc['msg']);
			redirect(base_url('admin/'.$login_proc['redirect'].'?page='.$login_proc['page'].'&status='.$login_proc['status'].'&msg='.bin2hex($msg)));
		}
	}

	function valid_username($username)
	{
		// check if data only contains letters, underscores, and whitespace
	  if (!preg_match("/^[a-zA-Z0-9_ ]*$/",$username))
	  	return false;
		else
			return true;
	}

	function valid_number_text($string)
	{
		// check if data only contains letters and whitespace
	  if (!preg_match("/^[a-zA-Z0-9 ]*$/",$string))
	  	return false;
		else
			return true;
	}

	function logout()
	{
		//logout sistem
		$auth = new Auth();
		$logout_proc = $auth->logout();
		$msg = $auth->get_message($logout_proc['msg']);
			redirect(base_url('admin/login?page=login&status='.$logout_proc['status'].'&msg='.bin2hex($msg)));
	}
}
