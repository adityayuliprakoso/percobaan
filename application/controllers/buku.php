<?php

class Buku extends CI_Controller{


function index(){

$this->load->view('vbuku.php');

}

function semua(){

$this->load->view('vbuku');
$this->load->view('vpenulis');

}

}

?>
