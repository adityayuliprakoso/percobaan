<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawat extends CI_Controller
{

    /**
     *
     *  https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dbkaryawan');
    }

    public function index()
    {
        $id_poli =$this->session->userdata('poli');
        $this->load->model('Dbkaryawan');
        $data['hasil'] = $this->Dbkaryawan->tampil_rawat($id_poli);
        $data['poli'] = $this->Dbkaryawan->tampil_poli();
        $this->load->view('dokter/rawat', $data);
    }



    public function detail_rekam($id_pasien)
    {
        $id_dokter = $this->session->userdata('id_dokter');
        $this->session->set_userdata('id_pasien', $id_pasien);
        // $this->Dbkaryawan->tambah_rekam_medis($id_dokter,$id_pasien);




        // $data['hasil'] = $this->Dbkaryawan->tampil_pasien_direkam($id_pasien);
        $data['hasil'] = $this->Dbkaryawan->tampil_pasien_direkam($id_pasien);

        $data['obat'] = $this->Dbkaryawan->tampil_obat();

        $cek=$this->Dbkaryawan->cek_rekam($id_pasien);
        if ($cek=='ada') {
            $data['no_rekam']=$this->Dbkaryawan->get_no_rekam($id_pasien)->no_rekam_medis;
            $no_rekam=$this->Dbkaryawan->get_no_rekam($id_pasien)->no_rekam_medis;
            $this->session->set_userdata('no_rekam', $no_rekam);
            // die();
            $this->session->set_userdata('no_rekam', $no_rekam);
            $this->load->view('dokter/rekam', $data);
        } else {
            $this->Dbkaryawan->tambah_rekam_medis($id_dokter, $id_pasien);
            $data['no_rekam']=$this->Dbkaryawan->get_no_rekam($id_pasien)->no_rekam_medis;
            $no_rekam=$this->Dbkaryawan->get_no_rekam($id_pasien)->no_rekam_medis;
            $this->session->set_userdata('no_rekam', $no_rekam);
            // $this->Dbkaryawan->tambah_detail_rekam_medis();
            $this->load->view('dokter/rekam', $data);
        }
    }
}
