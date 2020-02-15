<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../com/config.php");
require_once '../Classes/PHPExcel.php';
include '../Classes/PHPExcel/IOFactory.php';

$invoice_id = date("Ymd_His"); //GenID File Ymd
$date = date("Y-m-d"); //GenID File Ymd
$time = date("H:i:s"); //GenID File His
echo "<h2>UPLOAD FILE</h2><br>";

foreach($_FILES["file_plan_c"]["name"] as $index => $file)
{
	//File name
	$fileNameOld_c_x= $_FILES["file_plan_c"]["name"][$index];
	list($a1, $b1) = explode("'", $fileNameOld_c_x);
	$fileNameOld_c = $a1.$b2;

	$typeFile = explode(".",$_FILES["file_plan_c"]["name"][$index]);
	$typeFile = end($typeFile);
	$fileNameOld =$invoice_id.".".$typeFile; 
	
	$fileNameGen_c = $invoice_id."_x.".$typeFile;
	$uploadDate = date("Y-m-d H:i:s");
	
	if(!empty($_FILES["file_plan_c"]["tmp_name"][$index]) && is_uploaded_file($_FILES["file_plan_c"]["tmp_name"][$index]))
	{
		// move the file from the temporary directory to somewhere of your choosing
		move_uploaded_file($_FILES["file_plan_c"]["tmp_name"][$index], "file/".$fileNameGen_c);
		$movePath = "file/".$fileNameGen_c;

		//print_r($_FILES["fileInv"]["name"]) ;
		$inputFileType = PHPExcel_IOFactory::identify($movePath);  
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
		$objReader->setReadDataOnly(true);  

		$objPHPExcel = $objReader->load($movePath);  
		
		//$worksheet = $objPHPExcel->getSheet(0);
		$sheetCount = ($objPHPExcel->getSheetCount())-1;
		$objWorksheet	= $objPHPExcel->setActiveSheetIndex($sheetCount);
		$oo2 = $objWorksheet->getCell('A1')->getValue();
		if ($oo2 == 'COUNT NO') 
		{ 
			$highestRow 	= $objWorksheet->getHighestRow();
			$highestColumn  = $objWorksheet->getHighestColumn();
			//echo $highestRow."<br>";
			for ($row = 2; $row <= $highestRow; $row++) 
			{	
				$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
				//echo $dataRow[$row]['A']."<br>";
				$a = $dataRow[$row]['A'];
				$b = $dataRow[$row]['B'];
				$c = $dataRow[$row]['C'];
				$d = $dataRow[$row]['D'];
				$e = $dataRow[$row]['E'];
				$f = $dataRow[$row]['F'];
				$g = $dataRow[$row]['G'];
				$h = $dataRow[$row]['H'];
				$i = $dataRow[$row]['I'];
				$j = $dataRow[$row]['J'];
				$k = $dataRow[$row]['K'];
				$l = $dataRow[$row]['L'];
				$m = $dataRow[$row]['M'];
				$n = $dataRow[$row]['N'];
				$o = $dataRow[$row]['O'];
				$p = $dataRow[$row]['P'];
				$q = $dataRow[$row]['Q'];
				$r = $dataRow[$row]['R'];
				$s = $dataRow[$row]['S'];
				$t = $dataRow[$row]['T'];
				$u = $dataRow[$row]['U'];
				$v = $dataRow[$row]['V'];
				$w = $dataRow[$row]['W'];
				$x = $dataRow[$row]['X'];
				$y = $dataRow[$row]['Y'];
				$z = $dataRow[$row]['Z'];
				$aa = $dataRow[$row]['AA'];
				$ab = $dataRow[$row]['AB'];
				$ac = $dataRow[$row]['AC'];
				$ad = $dataRow[$row]['AD'];
				$ae = $dataRow[$row]['AE'];
				$af = $dataRow[$row]['AF'];
				$ag = $dataRow[$row]['AG'];
				$ah = $dataRow[$row]['AH'];
				$ai = $dataRow[$row]['AI'];
				$aj = $dataRow[$row]['AJ'];
				$ak = $dataRow[$row]['AK'];
				$al = $dataRow[$row]['AL'];
				$am = $dataRow[$row]['AM'];
				$an = $dataRow[$row]['AN'];
				
				$sql_open = "DELETE FROM 'user' " ;
				$sql = $conn->query($sql_open);
				$sql_test = "INSERT INTO `user`(`id`,`conut_no`,`apply_date`,`stage`,`groupp`,`app_id`,`email`,`name`,`gender`,`date_of_birth`,`native_country`,`code`,`agree_accept`,`confirm_age`,`age`,`new_old`,`10_d`,`dw`,`date_of_first_course`,`first_center`,`last_center`,`date_of_last_course`,`residence_country`,`primary_language`,`sent_qe`,`reply_qe`,`occupation`,`other_technique`,`other_technique_2`,`pregnant`,`physical_health_problems`,`mental_health_problems`,`medication`, `intoxicant`, `other_info`, `follower`, `approve`, `manual`, `note`, `note_team`, `note_at`) 
				VALUES ('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$aa', '$ab', '$ac', '$ad', '$ae', '$af', '$ag', '$ah', '$ai', '$aj', '$ak', '$al', '$am', '$an')";
				$objQuery = $conn->query($sql_test);	
				//echo $sql_test."<br>";	
				echo "<span class='badge badge-success'>Good </span>=>"."บรรทัดที่ ".$row."เพิ่มรายการรถสำเร็จ<br>";
							
					

				
			}
			$sum2=$index+1;
			echo "<span class='badge badge-success'>Good</span>=>".$sum2.".".$fileNameOld_c."<br>";
		}
		else
		{
			$sum2=$index+1;
			echo "<span class='badge badge-danger'>Error Format== กรุณาใช้รูปแบบไฟล์ที่ถูกต้อง</span>=>".$sum2.".".$fileNameOld_c."<br>";
		}
		unlink("file/".$fileNameGen_c);
	}
	
}


?> 