
<meta http-equiv="refresh" content="1;url=test_a.php" />
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<title>Document</title>
</head>
<body>
<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../com/config.php");
require_once '../Classes/PHPExcel.php';
include '../Classes/PHPExcel/IOFactory.php';

		$sql_del = "DELETE FROM user ";
		$rs_del = $conn->query($sql_del);
		
?>
    <div class = "page_load">
    <div class="progress-bar"style="--width: 20" data-label="Loading..."></div>
    </div>
    
  </body>
    

  

<script>
    const progressBar = document.getElementsByClassName('progress-bar')[0]
    setInterval(() => {
    const computedStyle = getComputedStyle(progressBar)
    const width = parseFloat(computedStyle.getPropertyValue('--width')) || 0
    progressBar.style.setProperty('--width', width + .1)
    }, 5)


    // $( document ).ready(function() {
    // console.log( "ready!" );
    // document.getElementById("loading").style.width = "100%";
    // });


</script>

</html>