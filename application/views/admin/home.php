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

				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Jumlah</h5>
							<h4>Dokter</h4>
						</div>
						<div class="stats-right">
							<label> 1</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
							<h5>Jumlah</h5>
							<h4>Karyawan</h4>
						</div>
						<div class="stats-right">
							<label> 1</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Jumlah</h5>
							<h4>Obat</h4>
						</div>
						<div class="stats-right">
							<label>1</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>


		</div>


		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Ahoy</a></p>
		</div>
        <!--//footer-->
	</div>
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
