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

				<?php $this->load->view('karyawan/template/sidebar'); ?>

		<!--left-fixed -navigation-->
		<!-- header-starts -->
			<?php $this->load->view('karyawan/template/upbar'); ?>
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
									<h4>Data Pasien</h4>
								</div>


								<div class="form-body">


											<h3>	<button type="button" class="label label-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Pasien</button> </h3>

													<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="exampleModalLabel"> <b>Tambah Data Pasien </b></h4>
																</div>
																<div class="modal-body">

																	<form action="" method="post" id="form_tambah_pasien">
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Nama :</label>
																			<input type="text" class="form-control" id="nama" name="nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Tanggal Lahir :</label>
																			<input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="recipient-name" name="tgl_lahir">

																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Jenis Kelamin :</label>
                                      <select class="form-control" id="recipient-name" name="jenis_kelamin" required>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                      </select>

																			<div class="form-group">
																				<label for="recipient-name" class="control-label">Agama :</label>
                                        <select class="form-control" id="recipient-name" name="agama" required>
                                          <option value="Islam">Islam</option>
                                          <option value="Kristen">Kristen</option>
                                          <option value="Katolik">Katolik</option>
                                          <option value="Buddha">Buddha</option>
                                        </select>
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="message-text" class="control-label">Pekerjaan :</label>
																					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Alamat :</label>
                                      <textarea class="form-control" id="alamat" name="alamat" required></textarea>
																		</div>



																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																	<button type="button" onclick="sweetalert('tambah_pasien');" class="btn btn-primary">Simpan</button>
																</div>
															</div>
														</div>
													</div>
												</form>

																														<!-- MODAL DAFTAR RAWAT -->

																														<div class="modal fade" id="rawatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																																		<h4 class="modal-title" id="exampleModalLabel">Tambah Data Rawat</h4>
																																	</div>
																																	<div class="modal-body">
																																		<form action="" id="form_tambah_daftar" method="post">
																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">ID</label>
																																				<input type="text" class="form-control" id="id" name="id" readonly>
																																			</div>

																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Nama:</label>
																																				<input type="text" class="form-control" id="nama" name="nama" readonly>
																																			</div>
																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Tanggal:</label>
																																				<input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="tanggal" name="tanggal" readonly>
																																			</div>

																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Poli:</label>
																																				<select class="form-control" id="poli" name="poli">
																																					<?php
                                                                                                                                                    foreach ($poli as $data) {
                                                                                                                                                        ?>
																																					<option value="<?php echo"$data->id_jenis_poli"; ?>"> <?php echo"$data->nama_poli"; ?> </option>
																																					<?php
                                                                                                                                                    } ?>

																																				</select>

																																			</div>

																																			<div class="form-group">
																																				<label for="recipient-name" class="control-label">Keterangan:</label>
																																				<input type="text" class="form-control" id="keterangan" name="keterangan">

																																			</div>


																																	</div>
																																	<div class="modal-footer">
																																		<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																																		<button type="button" onclick="sweetalert('tambah');" class="btn btn-primary">Simpan</button>
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
																<h4 class="modal-title" id="exampleModalLabel"> <b>Ubah Data Pasien </b></h4>
															</div>
															<div class="modal-body">

																<form action="" method="post">
																	<div class="form-group">

																		<input type="hidden" class="form-control" id="id" name="id">
																	</div>

																	<div class="form-group">
																		<label for="recipient-name" class="control-label">Nama :</label>
																		<input type="text" class="form-control" id="nama_ubah" name="nama">
																	</div>

																	<div class="form-group">
																		<label for="recipient-name" class="control-label">Tanggal Lahir :</label>
																		<input type="text"  class="form-control" id="tgl_lahir" name="tgl_lahir" readonly>

																	</div>
																	<div class="form-group">
																		<label for="recipient-name" class="control-label">Jenis Kelamin :</label>
																		<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
																			<option value="Pria">Pria</option>
																			<option value="Wanita">Wanita</option>
																		</select>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Agama :</label>
																			<select class="form-control" id="agama" name="agama">
																				<option value="Islam">Islam</option>
																				<option value="Kristen">Kristen</option>
																				<option value="Katolik">Katolik</option>
																				<option value="Buddha">Buddha</option>
																			</select>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="message-text" class="control-label">Pekerjaan :</label>
																				<input type="text" class="form-control" id="pekerjaan_ubah" name="pekerjaan">
																	</div>
																	<div class="form-group">
																		<label for="recipient-name" class="control-label">Alamat :</label>
																		<textarea class="form-control" id="alamat_ubah" name="alamat"></textarea>
																	</div>



															</div>
															<div class="modal-footer">
																<button type="button" id="tombol_batal_ubah" class="btn btn-default" data-dismiss="modal">Batal</button>
																<button id="tombol_simpan" type="button" class="btn btn-primary">Simpan</button>
															</div>
														</div>
													</div>
												</div>
												</form>






												<div class="form-group">
                          <table class="table table-hover table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Nama</th>
																<th>Tanggal Lahir</th>
																<th>Jenis Kelamin</th>
                                <th>Agama</th>
																<th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>Tindakan</th>
                            </thead>
                            <tbody>
															<?php
                                                            $no = 1;
                                                            foreach ($hasil as $data): ?>
															<tr>
																<td><?php echo"$data->id_pasien"; ?></td>
                                <td><?php echo"$data->nama"; ?></td>
                                <td><?php echo "$data->tgl_lahir"; ?></td>
																<td><?php echo "$data->jenis_kelamin"; ?></td>
																<td><?php echo "$data->agama"; ?></td>
																<td><?php echo "$data->pekerjaan"; ?></td>
																<td><?php echo "$data->alamat"; ?></td>

                                <td>

																	<!-- TOMBOL DISNI -->
														<h4>

															<a href="javascript:;"
	                            data-id="<?php echo"$data->id_pasien"; ?>"
	                            data-nama="<?php echo"$data->nama"; ?>"
	                            data-toggle="modal" data-target="#rawatModal">

															<button  data-toggle="modal" data-target="#rawat-data" class="label label-warning">Daftar</button></a>


															<a href="javascript:;"
	                            data-id="<?php echo"$data->id_pasien"; ?>"
	                            data-nama="<?php echo"$data->nama"; ?>"
	                            data-alamat="<?php echo "$data->alamat"; ?>"

															data-tgl_lahir="<?php echo "$data->tgl_lahir"; ?>"
															data-jenis_kelamin="<?php echo "$data->jenis_kelamin"; ?>"
	                            data-agama="<?php echo "$data->agama"; ?>"
	                            data-pekerjaan="<?php echo "$data->pekerjaan"; ?>"
	                            data-toggle="modal" data-target="#ubahModal">

														  <button  data-toggle="modal" data-target="#ubah-data" class="label label-primary">Detail</button></a>



															<button type="button" onclick="hapus_pasien('<?php echo $data->id_pasien ?>','<?php echo $data->nama ?>');" class="label label-danger">Hapus</button>
														</h4>

																</td>
                              </tr>
															<?php
                                                            $no++;
                                                            endforeach;?>


                            </tbody>
                          </table>
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
						modal.find('#nama_ubah').attr("value",div.data('nama'));
						modal.find('#alamat_ubah').html(div.data('alamat'));
						$("#agama").val(div.data('agama'));
						$("#jenis_kelamin").val(div.data('jenis_kelamin'));

						modal.find('#tgl_lahir').val(div.data('tgl_lahir'));
						modal.find('#pekerjaan_ubah').attr("value",div.data('pekerjaan'));
				});

				$('#ubahModal').on('hidden.bs.modal', function (e) {

				  alert("asd");
				})

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

<script>

function hapus_pasien(id_pasien,nama_pasien){

	swal({
	  title: "Apakah anda yakin ?",
	  text: "Data pasien "+nama_pasien+" akan dihapus secara permanen!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonClass: "btn-danger",
	  confirmButtonText: "Ya, hapus!",
	  closeOnConfirm: false
	},
	function(){
	  swal("Berhasil!", "Data telah terhapus.", "success");

		$.ajax({
			url: '<?php echo base_url('karyawan/Pasien/hapus')?>',
			type: 'POST',
			data: {id_pasien:id_pasien}
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
			window.location.href = 'pasien';
		});

	});

}

</script>

<script>




</script>


<script>

function sweetalert(tipe){

var nama = document.getElementById('nama').value;
var alamat = document.getElementById('alamat').value;
var pekerjaan = document.getElementById('pekerjaan').value;
var name = document.getElementById('nama');

// if (!name.checkValidity()) {
//   // name.validationMessage;
// 	name.style.background ='#FFF9C4';
// }


if (!nama || !alamat || !pekerjaan){ swal("Perhatian!", "Harap lengkapi data. ", "warning");

			if(!nama && !alamat && !pekerjaan){	document.getElementById('nama').placeholder='Harap diisi..';name.style.background ='#FFF9C4';
			document.getElementById('alamat').placeholder='Harap diiisi..';document.getElementById('alamat').style.background ='#FFF9C4';
			document.getElementById('pekerjaan').placeholder='Harap diisi..';document.getElementById('pekerjaan').style.background ='#FFF9C4';}
			else if(!alamat){document.getElementById('alamat').placeholder='Harap diiisi..';document.getElementById('alamat').style.background ='#FFF9C4';name.style.background ='#FFFFFF';document.getElementById('pekerjaan').style.background ='#FFFFFF'}
			else if(!pekerjaan){document.getElementById('pekerjaan').placeholder='Harap diisi..';document.getElementById('pekerjaan').style.background ='#FFF9C4';name.style.background ='#FFFFFF'}
			else if(!nama){document.getElementById('nama').placeholder='Harap diisi..';name.style.background ='#FFF9C4';document.getElementById('alamat').style.background ='#FFF9C4';
					}


		}

else{

				if(tipe=='tambah_pasien'){
									$.ajax({
										url: '<?php echo base_url('karyawan/Pasien/tambah')?>',
										type: 'POST',
										data: $("#form_tambah_pasien").serialize(), // serializes the form's elements.
									           success: function(data)
									           {
									             swal("Berhasil!", "Data telah disimpan. ", "success");
									           }

									})
									.done(function() {
										console.log("success");
										window.location.href = 'pasien';
									})
									.fail(function() {
										console.log("error");
									})
									.always(function() {
										console.log("complete");
									});

								}else if(tipe=='simpan_pasien'){
									$.ajax({
										url: '<?php echo base_url('karyawan/Pasien/tambah')?>',
										type: 'POST',
										data: $("#form_tambah_pasien").serialize(), // serializes the form's elements.
									           success: function(data)
									           {
									             swal("Berhasil!", "Data telah disimpan. ", "success");
									           }

									})
									.done(function() {
										console.log("success");
										window.location.href = 'pasien';
									})
									.fail(function() {
										console.log("error");
									})
									.always(function() {
										console.log("complete");
									});
								}else if(tipe=='tambah'){
																	$.ajax({
																		url: '<?php echo base_url('karyawan/Pasien/tambah_daftar')?>',
																		type: 'POST',
																		data: $("#form_tambah_daftar").serialize(), // serializes the form's elements.
																	           success: function(data)
																	           {
																							 // alert("bsa");
																	               swal("Berhasil!", "Data telah ditambahkan. ", "success");
																	           }

																	})
																	.done(function() {
																		console.log("success");

																	})
																	.fail(function() {
																		console.log("error");
																	})
																	.always(function() {
																		console.log("complete");
																			window.location.href = 'pasien';
																	});

																}

															}


}

</script>

<script>

$("#tombol_simpan").click(function(event) {
	var nama = document.getElementById('nama_ubah').value;
	var alamat = document.getElementById('alamat_ubah').value;
	var pekerjaan = document.getElementById('pekerjaan_ubah').value;

	if (!nama || !alamat || !pekerjaan){ swal("Perhatian!", "Harap lengkapi data. ", "warning");

				if(!nama && !alamat && !pekerjaan){	document.getElementById('nama').placeholder='Harap diisi..';name.style.background ='#FFF9C4';
				document.getElementById('alamat').placeholder='Harap diiisi..';document.getElementById('alamat').style.background ='#FFF9C4';
				document.getElementById('pekerjaan').placeholder='Harap diisi..';document.getElementById('pekerjaan').style.background ='#FFF9C4';}
				else if(!alamat){document.getElementById('alamat').placeholder='Harap diiisi..';document.getElementById('alamat').style.background ='#FFF9C4';name.style.background ='#FFFFFF';document.getElementById('pekerjaan').style.background ='#FFFFFF'}
				else if(!pekerjaan){document.getElementById('pekerjaan').placeholder='Harap diisi..';document.getElementById('pekerjaan').style.background ='#FFF9C4';name.style.background ='#FFFFFF'}
				else if(!nama){document.getElementById('nama').placeholder='Harap diisi..';name.style.background ='#FFF9C4';document.getElementById('alamat').style.background ='#FFF9C4';
				die();
						}


			}

	else{

	$.ajax({
				url: '<?php echo base_url('karyawan/Pasien/ubah_pasien')?>',
				type: 'POST',
				data: $("#ubahModal").serialize(), // serializes the form's elements.
								 success: function(data)
								 {
									 swal("Berhasil!", "Data telah disimpan. ", "success");
								 }

			})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	}

});

</script>
