<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    include("../com/config.php");
    require_once '../Classes/PHPExcel.php';
    include '../Classes/PHPExcel/IOFactory.php';
//     $dir    = 'C:/Users/RyoX/Desktop/VipassanaApplicationProcess/workspace/ACCEPT-CONFIRM';
//     $files = scandir($dir);

//     print_r ($files) ;
//     $i = -2

//   foreach ($filename as $files ) {
//       echo "foo" ;
//   }

var_dump ($_FILES["file_plan_c"]) ;
  ?>
</body>
</html>