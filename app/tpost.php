<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	include 'script.php';
	include("../com/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>