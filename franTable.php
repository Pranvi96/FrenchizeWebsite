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
				$.getJSON('franTableProcess.php',function(jsonAry)
			 	{
					global=jsonAry;
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{
							$("#tbl").empty();
							$("#tbl").append("<tr><th>uid<th>pwd<th>name<th>mobile<th>location<th>city<th>state<th>email");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
									
										
									row.append("<td>"+jsonAry[i].uid);
									row.append("<td>"+jsonAry[i].pwd);
									row.append("<td>"+jsonAry[i].name);
									row.append("<td>"+jsonAry[i].mobile);
									row.append("<td>"+jsonAry[i].location);
									row.append("<td>"+jsonAry[i].city);
									row.append("<td>"+jsonAry[i].state);
									row.append("<td>"+jsonAry[i].email);
									
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