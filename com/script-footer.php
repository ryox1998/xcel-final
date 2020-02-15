<script src="../js/jquery-1.12.4.min.js"></script>	
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- sweet alert --> 
<script src="../dist/sweetalert.min.js"></script>
<script src="../dist/sweetalert-dev.js"></script>	

<!-- highcharts --> 
<script src="../js/highcharts.js"></script>
<script src="../js/exporting.js"></script> 

<script>
	var iOS = navigator.userAgent.match(/(iPod|iPhone|iPad)/);
	var safari = /Safari/.test(navigator.userAgent) &amp;&amp; /Apple Computer/.test(navigator.vendor);

	if(iOS || safari){
	   function iosVhHeightBug() {
		  var wH = $(window).height();
		  var wW = $(window).width();
		  $("#container").css('height', wH);
		  $("#container").css('width', wW);
	   }
	   setTimeout(function(){
		  iosVhHeightBug();
	   }, 1000);
	   $(window).bind('resize', iosVhHeightBug);
	}
</script>

<script type="text/javascript" language="javascript" src="../dttb-botton/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="../dttb-botton/buttons.print.min.js"></script>

<!--DataTable bExport End-->

<script src="../js/bootstrap-datepicker.min.js"></script>