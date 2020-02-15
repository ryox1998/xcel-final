<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	include 'script.php';
	include("../com/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<style>
		#waitingIcon_c
		{
			width:100%;
			height:95%;
			position:fixed;
			z-index:9999;
			background:url("../images/waiting-icon.gif") no-repeat center center rgba(0,0,0,0.1)
		}
	</style>
</head>
<body>



	
<div id="waitingIcon_c"></div>

<div class="main-container" id="main-container">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">			
				<div class="row">
					<div class="col-sm-12"></div>
						<div class="col-sm-12 center" style="margin-bottom:20px;">
							<div class="col-sm-2"></div>
							<div class="col-sm-8">
							<a href="http://localhost/web/app/test_a.php"><button class="btn btn-success">หน้าแสดงผล</button></a>
							<button class="btn btn-success" id="foolimport">อิมพอร์ตแบบโง่ๆ</button>
							<br><br>
							
								<form id='FormUpfile_c' enctype="multipart/form-data">
									<table class="table table-user-information">
					                    <tbody>
					                      	<tr>
					                        	<td class="col-sm-4">
					                        		 File Input Upload<br>เลือกไฟล์
					                        		<t style="color:red; font-weight:bold;">**</t>
					                        	</td>
					                        	<td>
					                        		<input  type="file" id="file_plan_c" name="file_plan_c[]"  accept=".xls,.xlsx,.csv" multiple/>
												<!-- <input type="hidden" id="file_plan_c" name="file_plan_c[]"  value=" <?php $xfile = 'kuay.xlxs'; ?> ">	 -->
					                        	</td>
					                      	</tr>
					                    </tbody>
				              		</table>
									<div class="col-xs-12 center"><br>
										<button class="btn btn-info" type="submit">
											<i class="ace-icon fa fa-check bigger-110"></i>
											Upload File
										</button>
									</div>

									
									<div class="col-xs-12 center"><br><br>
										<h3 style="color:red;">**การอัพโหลดไฟล์ Excel Files ควรตั้ง Sheet ที่จะอับโหลดให้อยู่ขวามือสุด**<br>**และต้องเป็น Active Sheet เท่านั้น**</h3>
									</div>
								</form>
							</div>	
						</div><div id="showtest_c"></div>
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>
<script>
// function gfg_Run() {
// 			var file_el = document.getElementById("file_plan_c") 
//             file_el.setAttribute('value', 
// 			'defaultValue'); 
//         } 
$(document).ready(function() {
	$('#waitingIcon_c').hide();

	$('#FormUpfile_c').on('submit', function(e) 
	{
		$('#foolimport').on('click', function(e)
	{
		
	})
		e.preventDefault();
		$('#waitingIcon_c').show();
		//var formData = new FormData();
		
		var formData = new FormData($(this)[0]);
		$.ajax({
            url: "upload_x.php", // our php file
            type: 'post',
			data: formData,
            dataType: 'html', // we return html from our php file
            async: true,
            processData: false,  // tell jQuery not to process the data
            contentType: false,   // tell jQuery not to set contentType
            success : function(returndata) 
			{
				$('#waitingIcon_c').hide();
				$('#showtest_c').html(returndata);
            }
        });	
	});	
});
</script>


</body>
</html>