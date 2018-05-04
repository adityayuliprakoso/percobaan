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
									<h4>Data Pengguna</h4>
								</div>


								<div class="form-body">
											<form>


	<h3> <a href="#"><span class="label label-success">Tambah Pengguna</span></a> </h3>


												<div class="form-group">
                          <table class="table table-hover table-striped">
                            <thead>
                                <th>No</th>
                                <th>NIP/ID</th>
																<th>Nama</th>
																<th>Username</th>
                                <th>Jabatan</th>
                                <th>Tindakan</th>
                            </thead>
                            <tbody>
															<?php
															$no = 1;
															foreach ($hasil as $data): ?>
															<tr>
																<td><?php echo"$data->id_obat"; ?></td>
                                <td><?php echo"$data->nama_obat"; ?></td>
                                <td><?php echo "$data->jenis_obat"; ?></td>
																<td><?php echo "$data->kategori_obat"; ?></td>
																<td><?php echo "$data->harga"; ?></td>
																<td><?php echo "$data->stok"; ?></td>

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
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};


			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
