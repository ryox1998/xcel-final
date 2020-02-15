<?php
include("../com/config.php");
error_reporting(E_ALL ^ E_NOTICE);

$data = array();

	$sql_plan = "SELECT * FROM user";
	$i=1;
	foreach($conn->query($sql_plan) as $row_plan)
	
	{
		$rData=array();
		$id_rt = $row_plan['id'];
		$rData[] = $i;
		$rData[] = "<a href='#' onclick= FunctionEdit_rt('".$id_rt."') >
						<span class='glyphicon glyphicon-edit' title='edit'></span>
					</a>";
		$rData[] = $row_plan['conut_no'];
		$rData[] = $row_plan['apply_date'];
		$rData[] = $row_plan['stage'];
		$rData[] = $row_plan['groupp'];
		$rData[] = $row_plan['app_id']; 
		$rData[] = $row_plan['email']; 
		$rData[] = $row_plan['name'];
		$rData[] = $row_plan['gender'];
		$rData[] = $row_plan['date_of_birth'];
		$rData[] = $row_plan['native_country'];
		$rData[] = $row_plan['code'];
		$rData[] = $row_plan['agree_accept'];
		$rData[] = $row_plan['confirm_age'];
		$rData[] = $row_plan['age'];
		$rData[] = $row_plan['new_old'];
		$rData[] = $row_plan['10_d'];
		$rData[] = $row_plan['dw'];
		$rData[] = $row_plan['date_of_first_course'];
		$rData[] = $row_plan['first_center'];
		$rData[] = $row_plan['last_center'];
		$rData[] = $row_plan['date_of_last_course'];
		$rData[] = $row_plan['residence_country'];
		$rData[] = $row_plan['primary_language'];
		$rData[] = $row_plan['sent_qe'];
		$rData[] = $row_plan['reply_qe'];
		$rData[] = $row_plan['occupation'];
		$rData[] = $row_plan['other_technique'];
		$rData[] = $row_plan['other_technique_2'];
		$rData[] = $row_plan['pregnant'];
		$rData[] = $row_plan['physical_health_problems'];
		$rData[] = $row_plan['mental_health_problems'];
		$rData[] = $row_plan['medication'];
		$rData[] = $row_plan['intoxicant'];
		$rData[] = $row_plan['other_info'];
		$rData[] = $row_plan['follower'];
		$rData[] = $row_plan['approve'];
		$rData[] = $row_plan['manual'];
		$rData[] = $row_plan['note'];
		$rData[] = $row_plan['note_team'];
		$rData[] = $row_plan['note_at'];
		$rData[] =  "<a href='#' onclick= FunctionDel_rt('".$id_rt."')>
						<span class='glyphicon glyphicon-floppy-remove' title='delete'></span>
					</a>"; 
		$data[] = $rData;
		$i++;
			
	}

	$json_data = array(
	   "draw" 			=> intval($_POST['draw']),
	   "recordsTotal" 	=> intval( $numRows ),  // total number of records
	   "recordsFiltered"=> intval( $numRows ), // total number of records after searching, if there is no searching then totalFiltered = totalData
	   "data"           => $data   // total data array
	   );

	echo json_encode($json_data);  // send data as json format
?>

