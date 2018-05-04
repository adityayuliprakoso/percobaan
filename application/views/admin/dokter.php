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
<?php $this->load->view('admin/template/meta'); ?>
<?php $this->load->view('admin/template/css'); ?>
<?php $this->load->view('admin/template/js'); ?>

</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->

				<?php $this->load->view('admin/template/sidebar'); ?>

		<!--left-fixed -navigation-->
		<!-- header-starts -->
			<?php $this->load->view('admin/template/upbar'); ?>
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
									<h4>Data Dokter</h4>
								</div>


								<div class="form-body">




											<form>

											<h3>	<button type="button" class="label label-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Dokter</button> </h3>
													<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h4>
																</div>
																<div class="modal-body">
																	<form>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">NIP:</label>
																			<input type="text" class="form-control" id="recipient-name">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Nama:</label>
																			<input type="text" class="form-control" id="recipient-name">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Jenis Kelamin:</label>
																			<input type="text" class="form-control" id="recipient-name">
																			<div class="form-group">
																				<label for="recipient-name" class="control-label">Alamat:</label>
																				<input type="text" class="form-control" id="recipient-name">
																			</div>
																		</div>
																		<div class="form-group">
																			<label for="message-text" class="control-label">Alamat:</label>
																			<textarea class="form-control" id="message-text"></textarea>
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">No. HP:</label>
																			<input type="text" class="form-control" id="recipient-name">
																		</div>

																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Username:</label>
																			<input type="text" class="form-control" id="recipient-name">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Passowrd:</label>
																			<input type="text" class="form-control" id="recipient-name">
																		</div>
																		<div class="form-group">
																			<label for="recipient-name" class="control-label">Jenis Poli:</label>
																			<input type="text" class="form-control" id="recipient-name">
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
                                <th>Id</th>
                                <th>NIP</th>
																<th>Nama</th>
																<th>Poli</th>
                                <th>Alamat</th>
																<th>No HP</th>
                                <th>Tindakan</th>
                            </thead>
                            <tbody>
															<?php
															$no = 1;
															foreach ($hasil as $data): ?>
															<tr>
																<td><?php echo"$data->id_dokter"; ?></td>
                                <td><?php echo"$data->NIP"; ?></td>
                                <td><?php echo "$data->nama"; ?></td>
																<td><?php echo "$data->id_jenis_poli"; ?></td>
																<td><?php echo "$data->alamat"; ?></td>
																<td><?php echo "$data->no_hp"; ?></td>

                                <td>
<h4>
																	<a href="#"><span class="label label-primary">Ubah</span></a>
																	<a href="#"><span class="label label-danger">Hapus</span></a>
</h4>

																</td>
                              </tr>
															<?php
															$no++;
															endforeach;?>

                              <!-- <?php $no = 0;
                                foreach ($blogspot_cafeimers as $user_account):
                              ?>
                              <tr>
                                <td><?php echo$no+1 ?></td>
                                <td><?php echo $user_account['bc_displayName']; ?></td>
                                <td><?php //echo count($blogspot_blog[$no]); ?> blog</td>
                                <td><a class="btn btn-success btn-xs" style="color: green;" href="<?php echo base_url('admin/blog/get_list_blog_admin')."?id=",urlencode($user_account['bc_id']) ?>">List blog</a><span> &ensp; </span><a href="<?php echo base_url('admin/blog/delete_useraccount')."?id=",urlencode($user_account['bc_id']) ?>" class="btn btn-danger btn-xs" style="color: red;\">Hapus</a></td>
                              </tr> -->
                              <?php $no++; endforeach ?>
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
