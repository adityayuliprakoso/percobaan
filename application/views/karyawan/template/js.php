<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->

<!-- chart -->
<script src="<?php echo base_url('/assets/js/Chart.js') ?>"></script>
<!-- //chart -->
 <!-- js-->
<script src="<?php echo base_url('/assets/js/jquery-1.11.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/modernizr.custom.js') ?>"></script>
<!--webfonts-->
<!--animate-->
<script src="<?php echo base_url('/assets/js/wow.min.js') ?>"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<!--//Metis Menu -->
<!-- Metis Menu -->

<script src="<?php echo base_url('/assets/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/jquery.nicescroll.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/scripts.js') ?>"></script>

<script src="<?php echo base_url('/assets/js/metisMenu.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/js/custom.js') ?>"></script>
<!-- Classie -->
  <script src="<?php echo base_url('/assets/js/classie.js') ?>"></script>
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
<!-- Bootstrap Core JavaScript -->


  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.marquee.js') ?>"></script>

  <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.jqcandlestick.min.js') ?>"></script>

  <!--max-plugin-->
  <script type="text/javascript" src="<?php echo base_url('/assets/js/plugins.js') ?>"></script>
  <!--//max-plugin-->

  <!--scrolling js-->
  <script src="<?php echo base_url('/assets/js/jquery.nicescroll.js') ?>"></script>
  <script src="<?php echo base_url('/assets/js/scripts.js') ?>"></script>
  <!--//scrolling js-->

	<!-- sweetalert -->
	<script type="text/javascript" src="<?php echo base_url('/assets/js/sweetalert.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/sweetalert.min.js') ?>"></script>
