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

	<form id="FormUpfile_c"  method="POST" enctype="multipart/form-data">
		<?php  $file = file_get_contents("kuay.xlsx");?>
		<input type="hidden" id="file_plan_c" name="file_plan_c[]" value="<? $file ;?>">	
		<!-- <input  type="file" id="file_plan_c" name="file_plan_c[]"  accept=".xls,.xlsx,.csv" multiple/> -->
		<button type="submit">send</button>
</form>
</body>
<script>
	
$(document).ready(function() {
	$('#waitingIcon_c').hide();
	$('#FormUpfile_c').on('submit', function(e) 
	{
		
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
</html>
