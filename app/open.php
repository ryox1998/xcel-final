
<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body style="text-align:center;" id="body"> 
    <h1 style="color:green;">   
            GeeksForGeeks   
        </h1> 
    <input type='text' id='id1' /> 
    <br> 
    <br> 
    <button onclick="gfg_Run()"> 
        click to set 
    </button> 
    <p id="GFG_DOWN" style="color:green;  
                            font-size: 20px; 
                            font-weight: bold;"> 
    </p> 
    <script> 
        var el_down = document.getElementById("GFG_DOWN"); 
        var inputF = document.getElementById("id1"); 
  
        function gfg_Run() { 
            inputF.setAttribute('value', 'defaultValue'); 
            el_down.innerHTML =  
                   "Value = " + "'" + inputF.value + "'"; 
        } 
    </script> 
</body> 
  
</html> 




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
// $dir = "C:/Users/RyoX/Desktop/VipassanaApplicationProcess/workspace/ACCEPT-CONFIRM";

// Open a directory, and read its contents
// if (is_dir($dir)){
//   if ($dh = opendir($dir)){
//     while (($file = readdir($dh)) !== false){
//       echo "filename:" . $file . "<br>";
//     }
//     closedir($dh);
//   }
// }

// $file_s = fopen( "$file" );
// echo fgets($file_s,"r");
// fclose($file_s);

?>
</body>
</html> -->