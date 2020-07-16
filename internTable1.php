<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">

	input[type="button"]
	{
		background-image:url(pics/bg12.jpg); color:#FFF
		/*padding:8px;margin:5px; background-color:#F06;
		color:#9FF; outline:none; border:none;
		border-radius:10px 10px 10px 10px;*/
	}
	.oke{background-color:#FFC;}
</style>
</head>

<script src="js/jquery-1.12.3.min.js" type="application/javascript"></script>
    
	<script type="application/javascript">
		var global;
			function loadALL()
			{	 	
				$.getJSON('internTableProcess.php',function(jsonAry)
			 	{
					global=jsonAry;
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{
							$("#tbl").empty();
							$("#tbl").append("<tr><th>Mobile<th>Name<th>City<th>Address<th>location<th>College/School<th>Age<th>Email<th>Father_Name<th>Mother_Name<th>Guardian_no<th>Sibling<th>Medical<th>Pic");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
									
										
									row.append("<td>"+jsonAry[i].Mobile);
									row.append("<td>"+jsonAry[i].Name);
									row.append("<td>"+jsonAry[i].City);
									row.append("<td>"+jsonAry[i].Address);
									row.append("<td>"+jsonAry[i].location);
									row.append("<td>"+jsonAry[i].College/School);
									row.append("<td>"+jsonAry[i].Age);
									row.append("<td>"+jsonAry[i].Email);
									row.append("<td>"+jsonAry[i].Father_Name);
									row.append("<td>"+jsonAry[i].Mother_Name);
									row.append("<td>"+jsonAry[i].Guardian_no);
									row.append("<td>"+jsonAry[i].Sibling);
									row.append("<td>"+jsonAry[i].Medical);
									row.append("<td>"+jsonAry[i].Pic);
									
									$("#tbl").append(row);
									
								}
							
						}
					
					
				 });
			}
			 
			
		
	</script>	 

<body onload="loadALL();">

<center>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<table class="table table-responsive table-bordered  table-hover" id="tbl" style="width:70%; border:4px solid" >
    </table>
    </div>
</div>
    </center>
    
	
    	
    	 <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </center>
</body>
</html>