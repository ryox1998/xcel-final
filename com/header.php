 <?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$ss_empno = $_SESSION["SSEmpNo"];
$ss_nameEN = $_SESSION["SSNameEN"];
$ss_Deptname= $_SESSION["SSDeptname"];
$ss_percode= $_SESSION["SSPerCode"];
	include "../app/script.php";
	if($_SESSION["SSEmpNo"] == "" && $_SESSION["SSNameEN"] == "")
	{
		echo"<script>window.location='../app/index.php';</script>";
		ob_end_flush();
	}
?>	
	<!--Modal Reset Password-->
	<div class="modal fade" id="modalResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header" style="margin-bottom:10px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Reset Password</h4>
				</div>
				<form role="form" id="formReset" name="formReset" method="post">
					<div class="modal-body">
						<div class="form-group">
							<input class="form-control" placeholder="Emp. No." id="empNoR" name="empNoR" type="text" autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="New Password" id="newPasswd" name="newPasswd" type="password">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Confirm New Password" id="confirmPasswd" name="confirmPasswd" type="password">
						</div>
						<div class="checkbox">
							<span id="msgboxReset"></span>
						</div>
					</div>
					<div class="modal-footer">
						<center><button type="submit" class="btn btn-md btn-success" id="btnResetPW"><span id="icon_load"></span> Reset</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-inverse" style="background-color:#333333;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="#">KPD WMS</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">สินค้าขาเข้า<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="in_stock.php" ><i class="fa fa-university"></i> ข้อมูลสินค้า</a></li>
							<li><a href="in_stock_charge.php" ><i class="fa fa-usd"></i> การเรียกเก็บเงิน</a></li>
							
							<!--li class="divider"></li-->
						</ul>
					</li>
				</ul>

				<!--ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">สินค้าขาออก<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="out_stock.php" ><i class="fa fa-scissors"></i> จ่ายของออก</a></li>
						</ul>
					</li>
				</ul-->

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">ออกใบส่งสินค้า D/O<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="out_stock.php" ><i class="fa fa-truck"></i> ใบส่งสินค้า</a></li>

						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">ออกใบแจ้งหนี้<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="invoice_storage.php" ><i class="fa fa-file-text"></i> ค่าจัดเก็บสินค่า(Storage)</a></li>
							<li><a href="invoice_rental.php" ><i class="fa fa-file-text"></i> ค่าเช่าพื้นที่(Rental)</a></li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">ข้อมูลหลัก<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="master_page.php" ><i class="fa fa-file-text"></i> กลุ่มข้อมูล</a></li>

						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li style="alight:right">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="ace-icon glyphicon glyphicon-user"></i> <?php echo $ss_nameEN;?>
						</a>
					</li>
					<?php 
					if($ss_percode == 1)
					{
					?>			
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-cog"></i> Admin <span class="caret"></span></a>
						<ul class="dropdown-menu">		
							<li><a href="emp_form.php" > Employee</a></li>
						</ul>
					</li>
					<?php }?>	
					<li>						
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="ace-icon fa fa-sign-in bigger-80"></i> Login <i class="ace-icon fa fa-caret-down"></i>
						</a>
						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="login_logout.php"> Logout</a>
							</li>
							<li>
								<a href="#" id="btnReset" data-target="#modalResetPassword" data-toggle="modal"> Reset Password</a>
							</li>		
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<script>
	//-----form reset password
	$("#formReset").submit(function() 
	{
		if($("#empNoR").val() == "")
		{
			$("#msgboxReset").html('Please input Emp. No.');
			$("#empNoR" ).focus();
		}
		else
		{
			if($("#newPasswd").val() != "" && $("#confirmPasswd").val() !="")
			{
				if($("#newPasswd").val() !=  $("#confirmPasswd").val())
				{
					$("#msgboxReset").html("Confirmpassword doesn't match,Please confirm again.");
				}
				else
				{
					$('#icon_load').html('<i class="fa fa-spinner fa-spin"></i>');
					$( "#btnResetPW" ).prop( "disabled", true );
					//----- sent data form Reset
					$.post( "../app/login_reset.php", { empNo: $("#empNoR").val() ,newPasswd: $("#newPasswd").val()  },function( data ) 
					{
						$('#icon_load').html('');
						$( "#btnResetPW" ).prop( "disabled", false );
						
						if(data == 1)
						{
							//alert("Save Successful");
							swal("Success", "Please,Confirm new password on your E-mail.", "success");
							//-----close modal
							$('#modalResetPassword').modal('hide'); 
							$('#formReset')[0].reset();
						}
						else if(data == 0)
						{
							//alert("Save Error");
							swal("Error", "Save Error", "warning");
						}
						else
						{
							alert(data);
						}
					});
				}
			}
			else
			{
				$("#msgboxReset").html("Please input new password.");
			}
		}
		
		return false; //not to post the  form physically
	});
	
	$( "#empNoR" ).change(function() 
	{
		if($("#msgboxReset").html() == "Please input Emp. No.")
		{
			$("#msgboxReset").html('');
		}
	});
	
	$( "#newPasswd,#confirmPasswd" ).change(function() 
	{
		if($("#msgboxReset").html() == "Please input new password.")
		{
			$("#msgboxReset").html('');
		}
		if($("#msgboxReset").html() == "Confirmpassword doesn't match,Please confirm again.")
		{
			$("#msgboxReset").html('');
		}
	});		
	</script>