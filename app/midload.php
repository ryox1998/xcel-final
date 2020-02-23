
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<body>
    <!-- <div class="page__load">
        <h1>Please wait while loading Data</h1>
        <div class="loading__box">
            <div id="loading"></div>
        </div>
    </div> -->


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

</body>
</html>





    <?php 
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        include("../com/config.php");
        require_once '../Classes/PHPExcel.php';
        include '../Classes/PHPExcel/IOFactory.php';

		$sql_del = "DELETE FROM user ";
        $rs_del = $conn->query($sql_del);


        
?>
<meta http-equiv="refresh" content="3;url=upload.php" />

<!-- <script>
 $(document).ready(function () {
     document.getElementById("mySidenav").style.width = "100%";
 });
</script> -->
