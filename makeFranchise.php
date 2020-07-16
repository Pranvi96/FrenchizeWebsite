<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">

	input[type="button"]
	{
		padding:8px;margin:5px; background-color:#F06;
		color:#9FF; outline:none; border:none;
		border-radius:20px 20px 20px 20px;
	}
	.oke{background-color:#66FF33;}
</style>
</head>

<script src="js/jquery-1.12.3.min.js" type="application/javascript"></script>
    
	<script type="application/javascript">
		var global;
			function loadALL()
			{	 	
				$.getJSON('makeFranchiseProcess.php',function(jsonAry)
			 	{
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
							
							$("#tbl").append("<tr><th>mobile<th>name<th>city<th>address<th>location<th>size<th>income<th>status<th>Action");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
									if(jsonAry[i].status==4)
										var row=$('<tr class="oke">');
										
									row.append("<td>"+jsonAry[i].mobile);
									row.append("<td>"+jsonAry[i].name);
									row.append("<td>"+jsonAry[i].city);
									row.append("<td>"+jsonAry[i].address);
									row.append("<td>"+jsonAry[i].location);
									row.append("<td>"+jsonAry[i].size);
									row.append("<td>"+jsonAry[i].income);
									row.append("<td>"+jsonAry[i].status);
									
				row.append("<td><input type='button' value='Make Franchise' onClick=doUpdate("+i+",4)>");
									
									$("#tbl").append(row);
									
								}
							
						}
					
					
				 });
			}
			 
			 function doUpdate(index,what)
			 {
				 //alert(global[index].mobile+" "+what);
				 var url="updateStatus.php?mobile="+global[index].mobile+"&what="+what;
				 $.get(url,function(data,status){
					 	alert(data);
						loadALL();
					 
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
    

    	<!--<table border="2" id="tbl" width="60%" rules="all" >
        		
        </table>-->
    	 <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
   
</body>
</html>