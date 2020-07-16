<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">

	input[type="button"]
	{
		padding:8px;margin:5px; background-color:#F99;
		color:#03F; outline:none; border:none;
		border-radius:10px 10px 10px 10px;
	}
	/*.oke{background-color:#66FF33;}*/
</style>


<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
    
	<script type="text/javascript">
	//$(document).ready(function(e) {
		var global;
			function loadALL()
			{	//alert(); 	
				$.getJSON('salehistoryProcess.php',function(jsonAry)
			 	{	//alert();
					$("#tbl").empty();
					if(jsonAry[0].msg=="error")
					{
						$("#tbl").append("<tr><th>No Record Found");
						return;
					}
					global=jsonAry;
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{
							
							$("#tbl").append("<tr><th>Franchise Id<th>Selected Items<th>Total Bill<th>Date");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
									//if(jsonAry[i].status==4)
										//var row=$('<tr class="oke">');
										
									row.append("<td>"+jsonAry[i].fid);
									row.append("<td>"+jsonAry[i].sitems);
									row.append("<td>"+jsonAry[i].tbill);
									row.append("<td>"+jsonAry[i].date);
				//row.append("<td><input type='button' value='Edit'");					
				//row.append("<td><input type='button' id='Delete' value='Delete' onclick=doDelete("+i+")");
									
									$("#tbl").append(row);
									
								}
							
						}
					
					
				 });
			}
			 
			//style="width:20%; border:solid";class="table-responsive"
			//<th colspan=3>Action
	</script>	 
</head>
<body onload="loadALL();">

<center>
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<table class="table table-responsive table-bordered  table-hover" id="tbl" style="width:50%; border:4px solid" >
    </table>
    </div>
</div>
    </center>	
    	 <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    
</body>
</html>