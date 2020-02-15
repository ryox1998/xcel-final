<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$status=$_POST['page'];
	
	if ($status == "add")
	{
		ADD();
	}
	else if ($status == "update")
	{
		UP();
	}
	else if ($status == "delete") 
	{
		DEL();	
	}

	

	function ADD()
	{
		/*require_once('../com/config.inc.php');
			$sql_add = "SELECT * FROM rental ORDER BY id DESC";
			$row = $conn->query($sql_add)->fetch(PDO::FETCH_ASSOC);
	    	$rental_codex = $row['rental_code'];
			$rental_code_ex = explode("-",$rental_codex);
			$rental_code_plus = $rental_code_ex[1]+1;
			$rental_code = "RT-".$rental_code_plus;

			$strSQL = "INSERT INTO rental (rental_code, customer_code, rental_date, rental_time, rental_zone, rental_location, rental_area, rental_unit, rental_type, rental_tpye_cost, rental_list) 
						VALUES ('{$rental_code}','{$_POST['rental_customer_code_a']}','{$_POST['rental_date_a']}','{$_POST['rental_time_a']}','{$_POST['rental_zone_a']}','{$_POST['rental_location_a']}','{$_POST['rental_area_a']}','{$_POST['rental_unit_a']}','{$_POST['rental_type_a']}','{$_POST['rental_type_cost_a']}','{$_POST['rental_remark_a']}')";
			$objQuery = $conn->query($strSQL);
		//echo $strSQL;*/
	}

	function UP()
	{
		require_once('../com/config.php');
		$sql ="UPDATE `user` SET `code`='{$_POST['code']}', `approve`='{$_POST['approve']}', `note`='{$_POST['note']}', `note_team`='{$_POST['note_team']}', `note_at`='{$_POST['note_at']}' WHERE id='{$_POST['id_rt_e']}'";
		$query=$conn->query($sql);
	}

	function DEL()
	{
		require_once('../com/config.php');
		$sql_del = "DELETE FROM user WHERE id='{$_POST['id_rt_d']}'";
		$rs_del = $conn->query($sql_del);
	}

