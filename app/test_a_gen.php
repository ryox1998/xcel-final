<?php
include "../com/config.php";
error_reporting(E_ALL ^ E_NOTICE);

	$page = $_POST['page'];

	if ( $page == 'edit') 
	{
		$id = $_POST['id'];
		$sql = "SELECT * FROM user where id='$id'";
		$row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
		$RE_PROFILE[] = $row['code'];
		$RE_PROFILE[] = $row['approve'];
		$RE_PROFILE[] =	$row['note'];
		$RE_PROFILE[] =	$row['note_team'];
		$RE_PROFILE[] =	$row['note_at'];
		$RE_PROFILE[] = $row['id'];
		$RE_PROFILE;

		echo json_encode($RE_PROFILE);
	}
?> 