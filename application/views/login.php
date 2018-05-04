<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Login Puskesmas Pasir Putih</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<?php $this->load->view('admin/template/meta'); ?>
<?php $this->load->view('admin/template/css'); ?>
<?php $this->load->view('admin/template/js'); ?>
<!--webfonts-->
<!--//webfonts-->
<!--animate-->
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->

		<!--left-fixed -navigation-->
		<!-- header-starts -->

		<!-- //header-ends -->
		<!-- main content start-->
			<div class="main-page login-page ">
				<h3 class="title1">Halaman Masuk bang</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome back to Novus AdminPanel ! <br> Not a Member? <a href="signup.html">  Sign Up »</a> </h4>
					</div>
					<div class="login-body">
						<form id="formLogin">
							<input type="text" class="user" id="username" name="username" placeholder="Username" required="">
							<input type="password" id="password" name="password" class="lock" placeholder="password">
							<input type="button" id="buttonSubmit" value="Login">
							<button onclick="autonumber('id_pasien','P')">tes</button>
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>

				<div class="login-page-bottom">
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Ahoy</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
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



<script>
$("#buttonSubmit").click(function(event) {

$.ajax({
	url: '<?php echo base_url('login/aksi_login'); ?>',
	type: "POST",
	data: $("#formLogin").serialize(),
	success: function(data)
           {
						 		if(data){

  swal("Berhasil Login!", "Selamat Datang "+data, "success");

						if(data == "dokter"){	 window.location.href = 'dokter';}

						else if (data == "karyawan") {
							 window.location.href = 'karyawan'; }

						else if (data == "admin") {
							 window.location.href = 'admin';
						}
						else{
					}

					}else{

// swal("Login Gagal!", "Username atau Password salah.", "error");

										swal({
								  title: "Login Gagal!",
								  text: "Username atau Password salah.",
								  type: "error",
								  showCancelButton: false,
								  closeOnConfirm: false,
								  showLoaderOnConfirm: false
								}, function () {
								  setTimeout(function () {
								    	window.location.href = 'login';
								  });
								});

					}

    }
})
});

</script>

<script>

function autonumber(kolom,awalan){

$.ajax({
	url: '<?php echo base_url('login/autonumber'); ?>',
	type: 'POST',
	data: {kolom: kolom,awalan: awalan},
	success: function(data)
					 {
						 alert(data);
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

</script>


</body>
</html>
