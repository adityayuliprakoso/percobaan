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
									<h4>Informasi Data Pasien</h4>
								</div>


								<div class="form-body">

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

																														<div class="modal fade" id="rawatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																																		<h4 class="modal-title" id="exampleModalLabel">Tambah Data Rawat</h4>
																																	</div>
																																	<div class="modal-body">
																																		<form action="<?php echo base_url('karyawan/Pasien/tambah_daftar')?>" method="post">
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
																																				<input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="
																																				" name="tanggal" readonly>
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

														  <button  onclick="detail_rekam('<?php echo $data->id_pasien;?>')" class="label label-primary">Detail</button>
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



<script type="text/javascript">
	function detail_rekam(id_pasien) {
		$.ajax({
			type: 'get',
			url : '<?php echo base_url('dokter/pasien/detail_rekam?id_pasien=')?>'+id_pasien,
			success: function(hasil) {
				$response = $(hasil);
				// ambil data dari url
				var id_pasien = $response.filter('#id_pasien').text();
				var nama = $response.filter('#nama').text();
				var tanggal = $response.filter('#tanggal').text();
				var periksa = $response.filter('#periksa').text();
				var diagnosa = $response.filter('#diagnosa').text();
				var tindakan = $response.filter('#tindakan').text();
				// nampilkan ke modal

				$('#id_pasien').html(id_pasien);
				$('#nama').html(nama);
				$('#tanggal_periksa').html(tanggal);
				$('#periksa').html(periksa);
				$('#diagnosa').html(diagnosa);
				$('#tindakan').html(tindakan);

				$('#ubahModal').modal('show');

			}
		});
	}
</script>
