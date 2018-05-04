<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Sistem Pelayanan Puskesmas Pasir Putih</title>
<?php $this->load->view('karyawan/template/meta'); ?>
<?php $this->load->view('karyawan/template/css'); ?>
<?php $this->load->view('karyawan/template/js'); ?>

</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->

				<?php $this->load->view('dokter/template/sidebar'); ?>

		<!--left-fixed -navigation-->
		<!-- header-starts -->
			<?php $this->load->view('dokter/template/upbar'); ?>
		<!-- //header-ends -->

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">



				<div class="grids">
					<div class="progressbar-heading grids-heading">

					</div>
					<div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Pemeriksaan Pasien</h4>
								</div>


								<div class="form-body">
									<div class="form-group">
<?php

foreach ($hasil as $data) {
    ?>


<div class="row">
    <div class="col-md-6">
      <table style="font-size:16px">
        <tr>
          <td>
            Nama
          </td>
          <td style="padding:8px">
            <?php echo ": $data->nama"?>
          </td>
        </tr>
        <tr>
          <td>
            Jenis Kelamin
          </td>
          <td style="padding:8px">
            <?php echo ": $data->jenis_kelamin"?>
          </td>
        </tr>
        <tr>
          <td>
            Tanggal Lahir
          </td>
          <td style="padding:8px">
            <?php echo ": $data->tgl_lahir"?>
          </td>
        </tr>
        </table>
    </div>

    <div class="col-md-6">
      <table style="font-size:16px">
          <tr>
            <td>
              Agama
            </td>
            <td style="padding:8px">
              <?php echo ": $data->agama"?>
            </td>
          </tr>
          <tr>
            <td>
              Pekerjaan
            </td>
            <td style="padding:8px">
              <?php echo ": $data->pekerjaan"?>
            </td>
          </tr>
          <tr>
            <td>
              Alamat
            </td>
            <td style="padding:8px">
              <?php echo ": $data->alamat"?>
            </td>
          </tr>
        </table>
    </div>
  </div>
	<?php
} ?>

</div>


													<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="exampleModalLabel"> <b>Tambah Data Pasien </b></h4>
																</div>
																<div class="modal-body">

																	<form action="<?php echo base_url('karyawan/Pasien/tambah')?>" method="post">
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Nama :</label>
																			<input type="text" class="form-control" id="recipient-name" name="nama">
																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Tanggal Lahir :</label>
																			<input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="recipient-name" name="tgl_lahir">

																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Jenis Kelamin :</label>
                                      <select class="form-control" id="recipient-name" name="jenis_kelamin">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                      </select>

																			<div class="form-group">
																				<label for="recipient-name" class="control-label">Agama :</label>
                                        <select class="form-control" id="recipient-name" name="agama">
                                          <option value="Islam">Islam</option>
                                          <option value="Kristen">Kristen</option>
                                          <option value="Katolik">Katolik</option>
                                          <option value="Buddha">Buddha</option>
                                        </select>
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="message-text" class="control-label">Pekerjaan :</label>
																					<input type="text" class="form-control" id="recipient-name" name="pekerjaan">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Alamat :</label>
                                      <textarea class="form-control" id="message-text" name="alamat"></textarea>
																		</div>



																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																	<button type="submit" class="btn btn-primary">Simpan</button>
																</div>
															</div>
														</div>
													</div>
												</form>

																														<!-- MODAL DAFTAR RAWAT -->

																														<div class="modal fade" id="obatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																																		<h4 class="modal-title" id="exampleModalLabel">Daftar Obat</h4>
																																	</div>
																																	<div class="modal-body">
																																		<form action="#" method="post">


																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Nama Obat:</label>
																																				<select class="form-control" id="obat" name="obat">
																																					<?php
                                                                                                                                                    foreach ($obat as $data) {
                                                                                                                                                        ?>
																																					<option value="<?php echo"$data->id_obat"; ?>"> <?php echo"$data->nama_obat"; ?> </option>
																																					<?php
                                                                                                                                                    } ?>

																																				</select>

																																			</div>

																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Jumlah:</label>
																																				<input type="text" class="form-control" id="keterangan" name="keterangan">

																																			</div>


																																	</div>
																																	<div class="modal-footer">
																																		<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																																		<button type="submit" class="btn btn-primary">Simpan</button>
																																	</div>
																																</div>
																															</div>
																														</div>
																														</form>
																														<!-- MODAL DAFTAR RAWAT SELESAI DSINI -->

																															<!-- MODAL UUBAAHH-->

												<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
													<div class="modal-dialog" role="document">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<h4 class="modal-title" id="exampleModalLabel"> <b>Informasi Data Pasien </b></h4>
															</div>
															<div class="modal-body">

																<form action="<?php echo base_url('karyawan/Pasien/ubah_pasien')?>" method="post">
																	<div class="form-group">

																		<input class="form-control"  name="id_pasien">
																	</div>

																	<div class="form-group">
                                    <table class="table table-bordered">
                             <tr>
                               <th>No</th>
                               <th>Tanggal Periksa</th>
                               <th>Periksa</th>
                               <th>Diagnosa</th>
                               <th>Tindakan</th>
                             </tr>
                             <?php
                             $n=1;
                             // $sql= mysqli_query($koneksi,"SELECT tb_rekam_medis.tgl_rekam,tb_rekam_medis.periksa,tb_rekam_medis.diagnosa,tb_rekam_medis.tindakan,tb_dokter.nama from tb_rekam_medis inner join tb_dokter on tb_rekam_medis.NIP=tb_dokter.NIP where id_pasien='".$_GET['id_pasien']."'");

                             foreach ($hasil as $data): ?>

                               <tr>
                                 <td><?php echo $n ?></td>
                                 <td id="tanggal_periksa"></td>
                                 <td id="periksa"></td>
                                 <td id="diagnosa"></td>
                                 <td id="tindakan"></td>
                               </tr>
                               <?php
                               $n= $n+1;
                                 endforeach;
                             ?>
                           </table></div>

															</div>

														</div>
													</div>
												</div>
												</form>


												<div class="form-group">


								<ul id="myTabs" class="nav nav-tabs" role="tablist"> <li role="presentation" class="active">
								<a href="#periksa-tab" role="tab" id="periksa" data-toggle="tab"  aria-expanded="false">Periksa (Anamnesa)</a></li>

								<li role="presentation" class="">
								<a href="#diagnosa-tab" id="diagnosa" role="tab" data-toggle="tab" aria-expanded="false">Diagnosa</a></li>

								<li role="presentation" class="">
								<a href="#tindakan-tab" id="tindakan" role="tab" data-toggle="tab" aria-expanded="false">Tindakan</a></li>

								<li role="presentation" class="">
								<a href="#resep-tab" id="resep" role="tab" data-toggle="tab" aria-expanded="false" style="display: none;">Resep Obat</a></li>

							</ul>

<div id="myTabContent" class="tab-content scrollbar1">
							<div role="tabpanel" class="tab-pane fade active in" id="periksa-tab" aria-labelledby="profile-tab"> <p></p>
								<div class="form-group" id="periksa" >
								<form class="" action="<?php echo base_url('dokter/Rekam/tambah_detail')?>" method="post">
								  <table>
										<tr>
										 <td>
											 <h5><b>&emsp;&emsp;</b></h5>
										 </td>
										 <td>
											<input type="text" id="id_pasien" value="<?php echo $this->session->userdata('id_pasien'); ?>" class="form-control"></input>
										</td>
										 <td>
											 <input type="text" id="no_rekam" value="<?php echo $no_rekam ?>" class="form-control"></input>
										 </td>
									 </tr>
								    <tr>
								      <td>
								        <h5><b>Deskripsi Periksa &emsp;&emsp;:</b></h5>
								      </td>
								      <td>
								        <textarea name="periksa" id="Txtperiksa" rows="6" cols="120" class="form-control" autofocus="autofocus"></textarea>
								      </td>
								    </tr>
								    <tr>
								      <td><br></td>
								    </tr>
								    <tr>
								      <td>
								        <h5><b>Tambahan Biaya &emsp;:</b></h5>
								      </td>
								      <td>
								        <div class="input-group">
								        <span class="input-group-addon">Rp</span>
								        <input type="text" name="biaya_periksa" value="" class="form-control" onkeyup="formatangka(this);">
								      </div>
								      </td>
								    </tr>
								    <tr>
								      <td><br></td>
								    </tr>
								    <tr>
								      <td colspan="2" align="center">
								        <!-- <input type="hidden" name="id_pasien" value="<?php echo $id_pasien ?>"> -->
								        <button type="submit" class="btn btn-success" >Submit</button>
								        <button type="reset" class="btn btn-warning">Hapus</button>
								      </td>
								      <td></td>
								    </tr>
								  </table>
								</form>
								</div>

							</div>

								<div role="tabpanel" class="tab-pane fade" id="diagnosa-tab" aria-labelledby="profile-tab"> <p>Diagnosa</p>

									<div class="form-group" id="periksa">
									<form class="" action="" method="post">
									  <table>
									    <tr>
									      <td>
									        <h5><b>Deskripsi Diagnosa &emsp;&emsp;:</b></h5>
									      </td>
									      <td>
									        <textarea name="periksa" id="Txtdiagnosa" rows="6" cols="120" class="form-control" autofocus="autofocus"></textarea>
									      </td>
									    </tr>
									    <tr>
									      <td><br></td>
									    </tr>
									    <tr>
									      <td>
									        <h5><b>Tambahan Biaya &emsp;:</b></h5>
									      </td>
									      <td>
									        <div class="input-group">
									        <span class="input-group-addon">Rp</span>
									        <input type="text" name="biaya_periksa" value="" class="form-control" onkeyup="formatangka(this);">
									      </div>
									      </td>
									    </tr>
									    <tr>
									      <td><br></td>
									    </tr>
									    <tr>
									      <td colspan="2" align="center">
									        <!-- <input type="hidden" name="id_pasien" value="<?php echo $id_pasien ?>"> -->
									        <button type="submit" class="btn btn-success" name="submit_periksa">Submit</button>
									        <button type="reset" class="btn btn-warning">Hapus</button>
									      </td>
									      <td></td>
									    </tr>
									  </table>
									</form>
									</div>


								</div>

								<div role="tabpanel" class="tab-pane fade" id="tindakan-tab" aria-labelledby="profile-tab"> <p>tindakan</p>


									<div class="form-group" id="periksa">

									  <table>
									    <tr>
									      <td>
									        <h5><b>Deskripsi Tindakan &emsp;&emsp;:</b></h5>
									      </td>
									      <td>
									        <textarea name="periksa" id="Txttindakan" rows="6" cols="120" class="form-control" autofocus="autofocus"></textarea>
									      </td>
									    </tr>
									    <tr>
									      <td><br></td>
									    </tr>
									    <tr>
									      <td>
									        <h5><b>Tambahan Biaya &emsp;:</b></h5>
									      </td>
									      <td>
									        <div class="input-group">
									        <span class="input-group-addon">Rp</span>
									        <input type="text" name="biaya_periksa" value="" class="form-control" onkeyup="formatangka(this);">
									      </div>
									      </td>
									    </tr>
									    <tr>
									      <td><br></td>
									    </tr>
									    <tr>
									      <td colspan="2" align="center">
									        <!-- <input type="hidden" name="id_pasien" value="<?php echo $id_pasien ?>"> -->
									        <button  id="tombol_tindakan" class="btn btn-success" name="tombol_tindakan">Selesai</button>
									        <button type="reset" class="btn btn-warning">Hapus</button>
									      </td>
									      <td></td>
									    </tr>
									  </table>

									</div>



								</div>

								<div role="tabpanel" class="tab-pane fade" id="resep-tab" aria-labelledby="profile-tab" > <p>Resep</p>
								<button data-toggle="modal" data-target="#obatModal">Tambah Obat</button>


								<div class="form-group">
									<table class="table table-bordered">
					 <tr>
						 <th>No</th>
						 <th>Nama Obat</th>
						 <th>Stok</th>
						 <th>Jumlah Ambil</th>
						 <th>Biaya</th>
						 <th>Opsi</th>
					 </tr>
					 <?php
                     $n=1;
                     // $sql= mysqli_query($koneksi,"SELECT tb_rekam_medis.tgl_rekam,tb_rekam_medis.periksa,tb_rekam_medis.diagnosa,tb_rekam_medis.tindakan,tb_dokter.nama from tb_rekam_medis inner join tb_dokter on tb_rekam_medis.NIP=tb_dokter.NIP where id_pasien='".$_GET['id_pasien']."'");

                     foreach ($obat as $data): ?>

						 <tr>
							 <td><?php echo $n ?></td>
							 <td ><?php echo "$data->nama_obat"; ?></td>
							 <td ><?php echo "$data->stok"; ?></td>
							 <td ></td>
							 <td ></td>
						 </tr>
						 <?php
                         $n= $n+1;
                        endforeach;
                     ?>
				 </table></div>


								</div>
</div>


							<div class="clearfix"> </div>
													</div>
										</div>
									</div>
								</form>
								</div>
							</div>
						</div>


		</div>

</div>

		<!--footer-->




        <!--//footer-->

	<!-- Classie -->


</body>
</html>

<script>
		$(document).ready(function() {
				// Untuk sunting
				$('#ubahModal').on('show.bs.modal', function (event) {
						var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
						var modal          = $(this)

						// Isi nilai pada field
						modal.find('#id').attr("value",div.data('id'));
						modal.find('#nama').attr("value",div.data('nama'));
						modal.find('#tanggal').html(div.data('tanggal'));
						$("#agama").val(div.data('agama'));
						$("#jenis_kelamin").val(div.data('jenis_kelamin'));

						modal.find('#tgl_lahir').val(div.data('tgl_lahir'));
						modal.find('#pekerjaan').attr("value",div.data('pekerjaan'));
				});
		});
</script>

<script>
		$(document).ready(function() {
				// Untuk sunting
				$('#rawatModal').on('show.bs.modal', function (event) {
						var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
						var modal          = $(this)

						// Isi nilai pada field
						modal.find('#id').attr("value",div.data('id'));
						modal.find('#nama').attr("value",div.data('nama'));
				});
		});
</script>




<script type="text/javascript">
    $('button').tooltip();
    function tampilRekam(id) {
      $.ajax({
        url : "dokter/isiRekamMedis.php?id_pasien="+id,
        success: function (data) {
          var $respon = $(data);
          $('#isi').html($respon.html());
          $('#rekam').modal('show');
        }
      });
    }
</script>


																			<!-- SKRIP ONCLICK -->

<script type="text/javascript">

$('#tombol_tindakan').click(function() {


var no_rekam_medis = $('#no_rekam').val();
var anamnesa = $('#Txtperiksa').val();
var diagnosa = $('#Txtdiagnosa').val();
var tindakan = $('#Txttindakan').val();


  $.ajax({
		// url: base_url + "dokter/rekam/tambah_detail",
		type:'POST',
    data:{no_rekam_medis: no_rekam_medis, anamnesa:anamnesa, diagnosa:diagnosa,tindakan:tindakan},
		url : '<?php echo base_url('dokter/rekam/tambah_detail')?>',
    success: function() {
      alert('added Successfully');

			$("#resep").show();
$("#periksa").hide();
$("#diagnosa").hide();
$("#tindakan").hide();
    }
  });

  return false;
});

</script>
