

function checkNext (fieldcheckid , fieldnextid , scriptfile )
{
	$('#'+fieldcheckid).keypress(function(e)			// field for check  ===
	{
		if(e.which == 13)     
		{
			var scanline = $('#'+fieldcheckid).val();   // get scan data===
			
			$.post(scriptfile ,
				{data: scanline},
				function(result)
				{
					var rs_param =  $.trim(result);		
					
					if(rs_param == scanline)
					{
						$("#"+fieldnextid).focus();
						console.log("function checkNext :equal");
					}else
					{
						$('#'+fieldcheckid).val("");
						$('#'+fieldcheckid).focus();
						console.log("function checkNext :not equal");
					}
				}// e function
			);
		}
	}); 
}	
		
//===================================================	

function checkEmpNext(fieldcheckid , fieldnextid , fieldpictureid , fieldinputid )
{
	console.log("status 1");
	
	$('#'+fieldcheckid).keypress(function(e)			// field for check  ===
	{
		if(e.which == 13)              
		{
			var scanline = $('#'+fieldcheckid).val();   // get scan data===
			console.log("scanline1=" + scanline);
			$.post("checkemp_x.php",
				{data: scanline},
				function(result)
				{
				
					//S validate recognize type JSON====
					if(result)  
					{
						try   
						{
							var obj = $.parseJSON(result);
							var emp = obj.emp_id_qry.toUpperCase();
							var picture = obj.picture;
							
							console.log("scanline2=" + scanline);
							console.log("result parseJSON=" + result);
							console.log("obj.emp_id_qry=" + obj.emp_id_qry);
							
							
							if(emp  == scanline.toUpperCase() )
							{
								$("#"+fieldpictureid).attr("src",picture);
								$("#"+fieldinputid).attr("value",emp );
								$("#"+fieldnextid).focus();
								console.log("checkemp :equal");
							}
							else
							{
								console.log("checkemp :not equal");
							}							
							
						} 
						catch(obj) 
						{
							//console.log(obj);    // error result was not json
							console.log("result="+result);
							
							$('#'+fieldcheckid).val("");
							$('#'+fieldcheckid).focus();
						}
					}
					//E validate recognize type JSON====
					
				}// e function result
			);
		}
	});
	
}


//==========================================================

		