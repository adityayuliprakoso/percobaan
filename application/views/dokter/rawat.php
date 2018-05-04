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
									<h4>Data Rawat</h4>
								</div>


								<div class="form-body">

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
															if (is_array($hasil) || is_object($hasil)){
															foreach ($hasil as $data): ?>
															<tr>
																<td><?php echo"$no"; ?></td>
                                <td><?php echo"$data->nama"; ?></td>
                                <td><?php echo "$data->tanggal"; ?></td>
																<td><?php echo "$data->nama_poli"; ?></td>
																<td><?php echo "$data->keterangan"; ?></td>

                                <td>
<h4>
																	<a href="<?php echo base_url()."dokter/Rawat/detail_rekam/".$data->id_pasien;?> "><span class="label label-primary">Periksa</span></a>
																	<a href="<?php echo base_url()."dokter/Rawat/hapus/".$data->id_daftar;?> "><span class="label label-danger">Batal</span></a>
</h4>

																</td>

                              </tr>
															<?php

															$no++;
															endforeach;}
															else{
																echo"Tidak ada antrian.";
															}

															?>


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
