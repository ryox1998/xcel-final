<?php 
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../com/config.php");
require_once '../Classes/PHPExcel.php';
include '../Classes/PHPExcel/IOFactory.php';

		$sql_del = "DELETE FROM user ";
		$rs_del = $conn->query($sql_del);
?>