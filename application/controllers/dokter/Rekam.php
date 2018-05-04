<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekam extends CI_Controller
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

    // 	$id_pasien = $this->session->userdata('id_pasien');
        // $data['hasil'] = $this->Dbkaryawan->tampil_pasien_direkam('9');

        $this->load->view('dokter/rekam', $data);
    }

    public function tambah_detail()
    {
        $no_rekam = $this->input->post('no_rekam_medis');
        $anamnesa = $this->input->post('anamnesa');
        $diagnosa = $this->input->post('diagnosa');
        $tindakan = $this->input->post('tindakan');

        $this->Dbkaryawan->tambah_detail_rekam_medis($no_rekam, $anamnesa, $diagnosa, $tindakan);
    }


    public function tambah_detail2()
    {
        $this->Dbkaryawan->tambah_detail_rekam_medis($this->session->userdata('no_rekam'));
        redirect(base_url("dokter/rekam"));
    }
}
