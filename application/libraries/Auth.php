<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{

	/**
	 * Base_code
	 * DImas Alan Wijaya : dimasalanwijaya007@gmail.com
	 */

	function __construct()
	{
		//menurunkan kelas-kelas siistem pada codeigniter
		$this->ci =& get_instance();
	}

	function login_admin($username, $password)
	{
		// login admin
		$this->ci->db->select('*');
		$this->ci->db->where('au_username', $username);
		$query = $this->ci->db->get('auth_user');
		if($query->num_rows() == 0)
		{
			$data = array('status' => '500', 'msg' => '2');
			return $data;
		}
		else
		{
			if (decrypt($query->row()->au_password) != $password)
			{
				$data = array('status' => '500', 'msg' => '2');
				return $data;
			}
			elseif ($query->row()->au_al_id != 1)
			{
				//function pengecekan id level admin = 1
				$data = array('status' => '500', 'msg' => '2');
				return $data;
			}
			elseif ($query->row()->au_active == 0)
			{
				$data = array('status' => '400', 'msg' => '3');
				return $data;
			}
			else
			{
				$_SESSION['admin']['au_id'] = $query->row()->au_id;
				$_SESSION['admin']['au_name'] = $query->row()->au_name;
				$_SESSION['admin']['au_username'] = $query->row()->au_username;
				$_SESSION['admin']['au_email'] = $query->row()->au_email;
				$data = array('status' => '200', 'msg' => '1');
				return $data;
			}
		}
	}

	function login_member($username, $password)
	{
		// login member
		$this->ci->db->select('*');
		$this->ci->db->where('au_username', $username);
		$query = $this->ci->db->get('auth_user');
		if($query->num_rows() == 0)
		{
			$data = array('status' => '500', 'msg' => '2', 'redirect' => 'login');
			return $data;
		}
		else
		{
			if (decrypt($query->row()->au_password) != $password)
			{
				$data = array('status' => '500', 'msg' => '2', 'redirect' => 'login');
				return $data;
			}
			elseif ($query->row()->au_al_id != 2)
			{
				//function pengecekan id level member = 2
				$data = array('status' => '500', 'msg' => '2', 'redirect' => 'login');
				return $data;
			}
			// elseif ($query->row()->au_active == 0)
			// {
			// 	$data = array('status' => '400', 'msg' => '3', 'redirect' => 'login');
			// 	return $data;
			// }
			else
			{
				$_SESSION['member']['au_id'] = $query->row()->au_id;
				$_SESSION['member']['au_name'] = $query->row()->au_name;
				$_SESSION['member']['au_username'] = $query->row()->au_username;
				$_SESSION['member']['au_email'] = $query->row()->au_email;
				$data = array('status' => '200', 'msg' => '1', 'redirect' => 'home');
				return $data;
			}
		}
	}

	function is_admin_logged_in()
	{
		//apakah admin mempunyai session untuk hak akses
		if(isset($_SESSION['admin']['au_id']))
			return true;
		else
			return false;
	}

	function is_member_logged_in()
	{
		//apakah member mempunyai session untuk hak akses
		if(isset($_SESSION['member']['au_id']))
			return true;
		else
			return false;
	}

	function mb_restr()
	{
		//restriction untuk member saat mengakses fungsi tanpa authentication
		if (!$this->is_member_logged_in())
			redirect(base_url('member/login'));
	}

	function ad_restr()
	{
		//restriction untuk admin saat mengakses fungsi tanpa authentication
		if (!$this->is_admin_logged_in())
			redirect(base_url('admin/login'));
	}

	function is_unique_username($username)
	{
		//apakah username yang diinputkan user sudah terdapat di db
		$this->ci->db->select('*');
		$this->ci->db->where('au_username', $username);
		$query = $this->ci->db->get('auth_user');
		if($query->num_rows() == 0)
			return true;
		else
			return false;
	}

	function get_message($id_message)
	{
		//mengambil pesan dari db
		$this->ci->db->select('*');
		$this->ci->db->where('am_id', $id_message);
		$query = $this->ci->db->get('auth_message');
		if($query->num_rows() != 0)
		{
			$data = $query->row()->am_message;
			return $data;
		}
		else
			return false;
	}

	function register($name, $username, $password, $email, $phone, $address = null)
	{
		//proses registrasi member
		$newdate = date('Y-m-d H:i:s', strtotime("+1 year"));
		$expired = strtotime($newdate);
		$insert_data = array
		(
			'au_name' => $name,
			'au_username' => $username,
			'au_password' => encrypt($password),
			'au_email' => $email,
			'au_phone' => $phone,
			'au_address' => $address,
			'au_timestamp' => now('Asia/Jakarta'),
			'au_active' => 1,
			'au_type' => 'free',
			'au_expired' => $expired
		);
		$insert_proc = $this->ci->db->insert('auth_user', $insert_data);
		if ($insert_proc)
		{
			$data = array('status' => 200, 'msg' => 5, 'page' => 'login');
			return $data;
		}
		else
		{
			$data = array('status' => 500, 'msg' => 6, 'page' => 'register');
			return $data;
		}
	}

	function logout()
	{
		//hapus session admin dan member
		$_SESSION['member']['au_id'] = null;
		$_SESSION['member']['au_name'] = null;
		$_SESSION['member']['au_username'] = null;
		$_SESSION['member']['au_email'] = null;
		$_SESSION['admin']['au_id'] = null;
		$_SESSION['admin']['au_name'] = null;
		$_SESSION['admin']['au_username'] = null;
		$_SESSION['admin']['au_email'] = null;
		$data = array('status' => '200', 'msg' => '7');
		return $data;
	}

}
