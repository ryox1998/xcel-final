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
<script>
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