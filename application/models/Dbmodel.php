<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbmodel extends CI_Model {

  function __construct() {
  parent::__construct();
  }
  public $table = 'petugas';

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      //jika bernilai 2 maka user tidak aktif
      if ($query->active == 0) return 2;

      //jika bernilai 3 maka password salah
      $hash = $query->password;
      if (md5($password) != $hash) return 3;

      return $query;
    }

  function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

  public function login_admin($data)
  {
    $this->db->select('*');
    $this->db->from('petugas');
    $this->db->where('username', $data['username']);
    $this->db->where('password', md5($data['password']));
    $query = $this->db->get();
    return $query->num_rows();
  }

  // function validate_user() {
  //        $this->db->where('username', $this->input->post('username'));
  //        $this->db->where('password', md5($this->input->post('password')));
  //
  //        $query = $this->db->get("petugas");
  //
  //        if( $query->num_rows == 1 )  {
  //           return true;
  //        }
  //    }
  //
  //    function create_member()  {
  //       $new_member_insert_data = array(
  //           'username' => $this->input->post("username"),
  //           'password' => md5($this->input->post("password")),
  //           'email'    => $this->input->post("email")
  //       );
  //       $insert = $this->db->insert("user", $new_member_insert_data);
  //
  //       return true;
  //   }
    // function select($table)
  	// {
  	// 	$this->db->select('*');
  	// 	$this->db->from($table);
  	// 	$query = $this->db->get();
    //
  	// 	return $query;
  	// }
    function tampil(){
      $tampil = $this->db->get ('tb_pasien');
      if ($tampil->num_rows() > 0) {
        foreach ($tampil->result() as $data) {
          $hasil[] = $data;
        }
        return $hasil;
      }
    }
    function tampil_obat(){
      $tampil = $this->db->get ('tb_obat');
      if ($tampil->num_rows() > 0) {
        foreach ($tampil->result() as $data) {
          $hasil[] = $data;
        }
        return $hasil;
      }
    }
    function tampil_karyawan(){
      $tampil = $this->db->get ('tb_karyawan');
      if ($tampil->num_rows() > 0) {
        foreach ($tampil->result() as $data) {
          $hasil[] = $data;
        }
        return $hasil;
      }
    }
    function tampil_dokter(){
      $tampil = $this->db->get ('tb_dokter');
      if ($tampil->num_rows() > 0) {
        foreach ($tampil->result() as $data) {
          $hasil[] = $data;
        }
        return $hasil;
      }
    }
    public function get_pasien()
    {
      $query = $this->db->get('pasien');
      if ($query->row_array() != NULL) {
        $data = $query->result_array();
      }
      return $data;
    }

    // function tambah_pasien($data){
    // $this->db->insert('pasien', $data);
    // return true;
    // }

    public function insert_pasien($data)
  	{
     	$this->db->insert('pasien', $data);
  	}

    function delete_pasien($id)
    {
      $this->db->where('id_pasien', $id);
      $query = $this->db->delete('pasien');
    }

}
