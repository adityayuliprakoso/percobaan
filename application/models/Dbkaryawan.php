<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dbkaryawan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public $table = 'petugas';

    public function cekAkun($username, $password)
    {
        //cari username lalu lakukan validasi
        $this->db->where('username', $username);
        $query = $this->db->get($this->table)->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }

        //jika bernilai 2 maka user tidak aktif
        if ($query->active == 0) {
            return 2;
        }

        //jika bernilai 3 maka password salah
        $hash = $query->password;
        if (md5($password) != $hash) {
            return 3;
        }

        return $query;
    }

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
        // $tampil=  $this->db->get_where($table,$where);
      //
      //   if ($tampil->num_rows() > 0) {
      //     foreach ($tampil->result() as $data) {
      //       $hasil[] = $data;
      //     }
      //     return $hasil;
      //   }
    }

    public function autonumber($table,$kolom,$awalan){

      $this->db->select($kolom);
      $this->db->order_by($kolom, "desc");
      $this->db->limit(1);
      $this->db->from($table);
      $query = $this->db->get();
      $rslt = $query->result_array();

      $total_rec = $query->num_rows();
      if ($total_rec == 0) {
          $nomor = 1;
      } else {
          $nomor = intval(substr($rslt[0][$kolom],strlen($awalan))) + 1;
      }
      $angka = $awalan.$nomor;
      return $angka;

    }

    public function tampil_data_login($username){
      $this->db->select('*');
      $this->db->from('tb_login');
      $this->db->where('username', $username);
      return $this->db->get()->row();
    }

    public function tampil_obat_direkam()
    {
        $tampil = $this->db->get('tb_obat');

        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $obat[] = $data;
            }
            return $obat;
        }
    }


    public function tampil_id_dokter($username)
    {
        // $this->db->select('username');
//     $this->db->where('username',$username);
//     $this->db->from('tb_login');


        $this->db->select('*');
        $this->db->from('tb_jenis_poli');
        $this->db->join('tb_dokter', 'tb_jenis_poli.id_jenis_poli = tb_dokter.id_jenis_poli');
        $this->db->join('tb_login', 'tb_dokter.username = tb_login.username');
        $item = $this->db->get()->row();

        return $item;
//
// // $this->db->query("select * from tb_pasien inner join tb_rekam_medis on tb_pasien.id_pasien = tb_rekam_medis.id_pasien inner join tb_detail_rekam_medis WHERE tb_pasien.id_pasien='9'");
//
//
//
//   $tampil = $this->db->get();
//
//   if ($tampil->num_rows() > 0) {
//     foreach ($tampil->result() as $data) {
//       $hasil[] = $data;
//     }
//     return $hasil;
//   }
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
    public function tampil()
    {
        $tampil = $this->db->get('tb_pasien');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function tampil_obat()
    {
        $tampil = $this->db->get('tb_obat');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $obat[] = $data;
            }
            return $obat;
        }
    }

    public function tampil_karyawan()
    {
        $tampil = $this->db->get('tb_karyawan');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    public function tampil_dokter()
    {
        $tampil = $this->db->get('tb_dokter');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function tampil_pasien()
    {
        $tampil = $this->db->get('tb_pasien');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function tampil_pasien_direkam($id_pasien)
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->where('id_pasien', $id_pasien);
        $tampil = $this->db->get();
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function cek_rekam($id_pasien)
    {
        $tes = $this->db->get('tb_rekam_medis');
        $this->db->where('id_pasien', $id_pasien);
        if ($tes->num_rows() > 0) {
            $cek='ada';
        } else {
            $cek='tidak';
        }
        return $cek;
    }

    public function get_no_rekam($id_pasien)
    {
        $this->db->select('*');
        $this->db->from('tb_rekam_medis');
        $this->db->where('id_pasien', $id_pasien);

        $no_rekam = $this->db->get()->row();

        return $no_rekam;
    }


    public function tampil_poli()
    {
        $tampil = $this->db->get('tb_jenis_poli');
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $poli[] = $data;
            }
            return $poli;
        }
    }


    public function tampil_ubah_pasien($id)
    {
        $query=$this->db->query("select * from tb_pasien WHERE id_pasien='$id'");

        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $ubah[] = $data;
            }
            return $ubah;
        }
    }

    public function tampil_rawat($id_poli)
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->join('tb_daftar', 'tb_pasien.id_pasien = tb_daftar.id_pasien');
        $this->db->join('tb_jenis_poli', 'tb_daftar.id_poli = tb_jenis_poli.id_jenis_poli');
        $this->db->where('tb_jenis_poli.nama_poli', $id_poli);

        $tampil = $this->db->get();
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    public function tampil_rawat_karyawan()
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->join('tb_daftar', 'tb_pasien.id_pasien = tb_daftar.id_pasien');
        $this->db->join('tb_jenis_poli', 'tb_daftar.id_poli = tb_jenis_poli.id_jenis_poli');

        $tampil = $this->db->get();
        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }


    public function tampil_detail_pasien($id_pasien)
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->join('tb_rekam_medis', 'tb_pasien.id_pasien = tb_rekam_medis.id_pasien');
        $this->db->join('tb_detail_rekam_medis', 'tb_rekam_medis.no_rekam_medis = tb_detail_rekam_medis.no_rekam_medis');
        $this->db->where('tb_pasien.id_pasien', $id_pasien);

        // $this->db->query("select * from tb_pasien inner join tb_rekam_medis on tb_pasien.id_pasien = tb_rekam_medis.id_pasien inner join tb_detail_rekam_medis WHERE tb_pasien.id_pasien='9'");



        $tampil = $this->db->get();

        if ($tampil->num_rows() > 0) {
            foreach ($tampil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }

        // return $tampil->result();
    }

    public function tambah_detail_rekam_medis($no_rekam, $anamnesa, $diagnosa, $tindakan)
    {
        //
        // $anamnesa='';
        // $diagnosa='';
        // $tindakan='';
        // $biaya='';
        //
        $this->db->query("INSERT into tb_detail_rekam_medis VALUES ('','$no_rekam',now(),'$anamnesa','$diagnosa','$tindakan','0')");
    }

    public function tambah_daftar($data)
    {
        $this->db->insert('tb_daftar', $data);

    }

    public function tambah_rekam_medis($id_dokter, $id_pasien)
    {
        $query=$this->db->query("INSERT into tb_rekam_medis values ('','$id_dokter','$id_pasien')");
    }


    public function ubah_pasien($data, $id)
    {
        $nama=$this->input->post('nama');
        $tgl_lahir=$this->input->post('tgl_lahir');
        $jenis_kelamin=$this->input->post('jenis_kelamin');
        $agama=$this->input->post('agama');
        $pekerjaan=$this->input->post('pekerjaan');
        $alamat=$this->input->post('alamat');

        $query=$this->db->query("UPDATE tb_pasien set nama='$nama',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',pekerjaan='$pekerjaan',alamat='$alamat' WHERE id_pasien='$id'");
    }

    public function insert_pasien($data)
    {
        $this->db->insert('tb_pasien', $data);
    }

    public function delete_pasien($id_pasien)
    {
        //  $this->db->where('id_pasien', $id_pasien);
        //$query = $this->db->delete('tb_pasien');
        $query=$this->db->query("DELETE FROM tb_pasien WHERE id_pasien='$id_pasien'");
    }


    public function delete_rawat($id_rawat)
    {
        //  $this->db->where('id_pasien', $id_pasien);
        //$query = $this->db->delete('tb_pasien');
        $query=$this->db->query("DELETE FROM tb_daftar WHERE id_daftar='$id_rawat'");
    }
}
