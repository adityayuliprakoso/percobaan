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
									<h4>Data Rawat</h4>
								</div>


								<div class="form-body">




											<form>

											<h3> <button type="button" class="label label-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" >Tambah Rawat</button> </h3>
													<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="exampleModalLabel">Tambah Data Rawat</h4>
																</div>
																<div class="modal-body">
																	<form>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label"></label>
																			<input type="text" class="form-control" id="id" name="id">
																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Nama:</label>
																			<input type="text" class="form-control" id="nama" name="nama">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Tanggal:</label>
																			<input type="date" value="<?php echo date('Y-m-d');?>" class="form-control" id="tanggal" name="tanggal">
																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Poli:</label>
																			<select class="form-control" id="poli" name="poli">
																				<?php
																				foreach ($poli as $data) {	?>
																				<option value="<?php echo"$data->id_jenis_poli"; ?>"> <?php echo"$data->nama_poli"; ?> </option>
																				<?php } ?>

																			</select>

																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Keterangan:</label>
																			<input type="text" class="form-control" id="keterangan" name="keterangan">

																		</div>

																	</form>
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
																	<button type="button" class="btn btn-primary">Simpan</button>
																</div>
															</div>
														</div>
													</div>



												<div class="form-group">
                          <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
																<th>Tanggal</th>
																<th>Poli</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </thead>
                            <tbody>
															<?php
															$no = 1;
															foreach ($hasil as $data): ?>
															<tr>
																<td><?php echo"$no"; ?></td>
                                <td><?php echo"$data->nama"; ?></td>
                                <td><?php echo "$data->tanggal"; ?></td>
																<td><?php echo "$data->nama_poli"; ?></td>
																<td><?php echo "$data->keterangan"; ?></td>

                                <td>
<h4>
																	<a href="#"><span class="label label-primary">Ubah</span></a>
																	<a href="<?php echo base_url()."karyawan/Rawat/hapus/".$data->id_daftar;?> "><span class="label label-danger">Batal</span></a>
</h4>

																</td>
                              </tr>
															<?php
															$no++;
															endforeach;?>


                            </tbody>
                          </table>
													</div>
											</form>
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
