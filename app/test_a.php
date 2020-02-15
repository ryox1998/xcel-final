<?php include 'script.php';  ?>
<div class="main-container" id="main-container">
	<div class="main-content">
		<div class="main-content-inner">
			<div class="page-content">
				<div class="row">
					<div class="col-sm-12">
						<div class="page-header">
							<h1>
								<i class="glyphicon glyphicon-calendar">User Listing</i><b></b><br><br>
							</h1>
							<center>
								<a href="upload.php"><button type="button" class="btn btn-info btm-lg">Upload File</button>	</a>		
								<a href="delete.php"><button type="button" class="btn btn-info btm-lg">Del</button>	</a>	
							</center>
						</div>
						
						<div class="col-sm-12" style="margin-top:20px;" id="show_S" >
							<table id="S_TB" cellpadding="0" cellspacing="0" border="0" class="nowrap cell-border stripe" width="100%" >
								<thead>
									<tr>
										<th class="thTable">No.<br>ลำดับที่</th>
										<th class="thTable">Edit<br>แก้ไข</th>
										<th class="thTable">COUNT NO</th>
										<th class="thTable">APPLY DATE</th>
										<th class="thTable">STAGE</th>
										<th class="thTable">GROUP</th>
										<th class="thTable">App ID</th>
										<th class="thTable">EMAIL</th>
										<th class="thTable">NAME</th>
										<th class="thTable">GENDER</th>
										<th class="thTable">DATE OF BIRTH</th>
										<th class="thTable">NATIVE COUNTRY</th>
										<th class="thTable">ติด CODE</th>
										<th class="thTable">AGREE ACCEPT</th>
										<th class="thTable">CONFIRM AGE</th>
										<th class="thTable">AGE</th>
										<th class="thTable">NEW / OLD</th>
										<th class="thTable">10-D</th>
										<th class="thTable">DW</th>
										<th class="thTable">DATE OF FIRST COURSE</th>
										<th class="thTable">FIRST CENTER</th>
										<th class="thTable">LAST CENTER</th>
										<th class="thTable">DATE OF LAST COURSE</th>
										<th class="thTable">RESIDENCE COUNTRY</th>
										<th class="thTable">PRIMARY LANGUAGE</th>
										<th class="thTable">SEND QE</th>
										<th class="thTable">REPLY QE</th>
										<th class="thTable">OCCUPATION</th>
										<th class="thTable">Other Technique</th>
										<th class="thTable">Other Technique2</th>
										<th class="thTable">PREGNANT</th>
										<th class="thTable">Physical health problems</th>
										<th class="thTable">Mental health problems</th>
										<th class="thTable">Medication</th>
										<th class="thTable">Intoxicant</th>
										<th class="thTable">Others Info</th>
										<th class="thTable">Follower</th>
										<th class="thTable">APPROVE</th>
										<th class="thTable">Manual: Yes_Female from 13 Nov: midoltown@gmail.com</th>
										<th class="thTable">NOTE</th>
										<th class="thTable">NOTE TEAM</th>
										<th class="thTable">NOTE AT</th>
										<th class="thTable">Delete<br>ลบ</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModalRT_edit" role="dialog"  >		
	<div class="modal-dialog">
		<!--S Modal content-->
		<div class="modal-content">
			<form method="post" enctype="multipart/form-data" name="form_rt_e" id="form_rt_e" action="#" >
		    	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h4 class="modal-title">Edit User</h4>
		        </div>
				<div class="modal-body">
	          		<table class="table table-user-information">
	          			<tbody>
	          				<tr>
	                        	<td>
	                        		ติด CODE
	                        		<t style="color:red; font-weight:bold;">**</t>
	                        	</td>
	                        	<td>
									<input class='form-control'  autocomplete='off' name='code' id='code' type='text'>
	                        	</td>
	                      	</tr>
	                      	<tr>
	                        	<td>
	                        		APPROVE
	                        		<t style="color:red; font-weight:bold;">**</t>
	                        	</td>
	                        	<td>
									<input class='form-control'  autocomplete='off' name='approve' id='approve' type='text'>
	                        	</td>
	                      	</tr>
	                      	<tr>
	                        	<td>
	                        		NOTE
	                        		<t style="color:red; font-weight:bold;">**</t>
	                        	</td>
	                        	<td>
									<input class='form-control'  autocomplete='off' name='note' id='note' type='text'>
	                        	</td>
	                      	</tr>
	                      	<tr>
	                        	<td>
	                        		NOTE TEAM
	                        		<t style="color:red; font-weight:bold;">**</t>
	                        	</td>
	                        	<td>
									<input class='form-control'  autocomplete='off' name='note_team' id='note_team' type='text'>
	                        	</td>
	                      	</tr>
	                      	<tr>
	                        	<td>
	                        		NOTE AT
	                        		<t style="color:red; font-weight:bold;">**</t>
	                        	</td>
	                        	<td>
									<input class='form-control' autocomplete='off' name='note_at' id='note_at' type='text'>
									<input name='id_rt_e' id='id_rt_e' type='hidden'>
									<input  id="page_rt_e" name="page" type="hidden" value="update">
	                        	</td>
	                      	</tr>
	          	        </tbody>
              		</table>	
              	</div>
	            <div class="modal-footer">
	                <button id="submit_rt_e" name="submit_rt_e" type="submit" class="btn btn-info btm-lg" data-toggle="modal">Submit</button>
	            </div>
            </form>
		</div>
	</div>
</div>
<script>
	//------------------------------S Gen Edit--------------------------------------
	function FunctionEdit_rt(id){
		//alert(id);
		$('#myModalRT_edit').modal('show');
		$.ajax({
			type: "POST",
			dataType: "json",
			url: "test_a_gen.php", //Relative or absolute path to response.php file
			data: "id="+id+"&page=edit",
			success: function(data)
			{
				
				$('#code').val(data[0]);
				$('#approve').val(data[1]);
				$('#note').val(data[2]);
				$('#note_team').val(data[3]);
				$('#note_at').val(data[4]);
				$('#id_rt_e').val(data[5]);
			}
		});
	}
	//------------------------------E Gen Edit--------------------------------------

	//------------------------------S Edit -------------------------------------
	$(document).ready(function() {
		//-----submit form formFile
		$( "#form_rt_e" ).submit(function( event ) 
		{
			event.preventDefault();
			if ($('#code').val() == "")
			{
				alert("Check Code Again !");
				$('#code').focus();
				return false;
			}
			else if ($('#approve').val() == "")
			{
				alert("Check Approve Again !");
				$('#approve').focus();
				return false;
			}
			else if ($('#note').val() == "")
			{
				alert("Check Note Again !");
				$('#note').focus();
				return false;
			}
			else if ($('#note_team').val() == "")
			{
				alert("Check Note Team Again !");
				$('#note_team').focus();
				return false;
			}
			else if ($('#note_at').val() == "")
			{
				alert("Check Note At Again !");
				$('#note_at').focus();
				return false;
			}
			$('#waitingIcon').show();
			var answer=confirm("Do you want update data?");
			if (answer==true)
			{
				//grab all form data
				var formData = new FormData($(this)[0]);
				$.ajax({
					url: "test_a_xx.php",
					type: 'POST',
					data: formData,
					cache: false,
					contentType: false,
					processData: false,
					success: function (returndata) {
						//alert(returndata);
						swal({title: "Successful", text: "Update Successful", type: "success"},
						   function(){ 
							   location.reload();
						   }
						);
					}
				});
				return false;
			}
			else
			{
				$('#waitingIcon').hide();
			}	
		});	
	});
	//------------------------------E Edit --------------------------------------

	//------------------------------S Del --------------------------------------
	function FunctionDel_rt(iddel){
		var answer=confirm("Do you want delete data?");
		if (answer==true)
		{
			$.ajax({
				url: "test_a_xx.php",
				type: 'POST',
				data: "page=delete&id_rt_d="+iddel,
				success: function(datadel)
				{
					//alert(datadel);
					swal({title: "Successful", text: "Delete Successful", type: "success"},
					   function(){ 
						   location.reload();
					   }
					);
				}
			});
		}
		else
		{
			$('#waitingIcon').hide();
		}
	}
	//------------------------------E Del --------------------------------------

		var S_TB = $('#S_TB').DataTable( {
		processing: true,
		serverside: true,
		ordering: true,
		searching: true,
		paging: true,
		select: true,
		bDestroy: true,
		iDisplayLength: 20,
		aLengthMenu: [[20, 60, 90, -1], [20, 60, 90, "All"]],
		dom: 'B<lf<t>ip>',
		buttons: [
			{
				extend:    'copyHtml5',
				text:      '<button type="button" class="btn btn-xs btn-info" data-toggle="button"><i class="fa fa-files-o"></i></button>',
				titleAttr: 'COPY'
			},
			{
				extend:    'excelHtml5',
				text:      '<button type="button" class="btn btn-xs btn-info" data-toggle="button"><i class="fa fa-file-excel-o"></i></button>',
				titleAttr: 'EXCEL'
			},
			{
				extend:    'csvHtml5',
				text:      '<button type="button" class="btn btn-xs btn-info" data-toggle="button"><i class="fa fa-file-text-o"></i></button>',
				titleAttr: 'CSV'
			},
			{
				extend:    'pdfHtml5',
				text:      '<button type="button" class="btn btn-xs btn-info" data-toggle="button"><i class="fa fa-file-pdf-o"></i></button>',
				titleAttr: 'PDF'
				
			},
			{
				extend:    'print',
				text:      '<button type="button" class="btn btn-xs btn-info" data-toggle="button"><i class="glyphicon glyphicon-print"></i></button>',
				titleAttr: 'PRINT'
			}
		],
		columns: [
			
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"},
			{ width: "5%",className: "dt-center"}
		],
		aoColumnDefs: [
			{ 'bSortable': false, 'aTargets': [0], }
		],
		scrollX: true,
		ajax: {
			url : "test_a_x.php",
			type: "POST"	
		}
	});
</script>