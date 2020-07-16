<!DOCTYPE html>
<html lang="en">
  <head>
   <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FranchiseConsole</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
	#tbill
	{
		display:none;
	}
	</style>
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="application/javascript">
		
		
		
		
	 	$(document).ready(function()
	{
		var global="";
		var sum=0;
		var str="";
		$("#cat").change(items);		
		$("#cat").change(price);
		
			$.getJSON('ListboxProcess.php',function(jsonAry)
			 	{
					global=jsonAry;
					var lookup = {};
					var tt=$("#cat").val();
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{
							
							$("#cat").empty();
							$("#cat").append("<option value='none'>Select</option>")
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<option>');
									var name = jsonAry[i].category;
									if (!(name in lookup))
									{
										lookup[name] = 1;
									  row.append("<option>"+jsonAry[i].category);
										$("#cat").append(row); 
									}
								}
								items();
								//price();
								
										
						}
				 });
			function items()
			{	 	
				$.getJSON('ListboxProcess.php',function(jsonAry)
			 	{
					
					var tt=$("#cat").val();
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{			
					
								$("#items").empty();
								
								$("#price").empty();
								
									for(i=0;i<jsonAry.length;i++)
										{
											var row1=$('<option>');
											var row2=$('<option>');
											if (jsonAry[i].category == tt)
											{
												row1.append("<option>"+jsonAry[i].items);
												row2.append("<option>"+jsonAry[i].price);
												$("#items").append(row1);
												$("#price").append(row2);
											}
										}						
						}
				 });
			
			}
			//});
			
			/*function price()
			{	 	
				$.getJSON('ListboxProcess.php',function(jsonAry)
			 	{
					
					var tt=$("#cat").val();
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{			
					
								$("#price").empty();
								
									for(i=0;i<jsonAry.length;i++)
										{
											var row1=$('<option>');											
											if (jsonAry[i].category == tt)
											{
												row1.append("<option>"+jsonAry[i].price);
												$("#price").append(row1); 
											}
										}						
						}
				 });
			}*/
			
			$("#add").click(doAdd2);
	
	function doAdd2()
		{
			var q=prompt("Enter Quantity");
			
			var i;
			var tek= document.getElementById("items");
			var fee= document.getElementById("price");
			
			//sum=0;
			
			for(i=0;i<tek.length;i++)
			  {
				if(tek[i].selected==true)
				{
					str=str+tek[i].value+",";
					$("#sitems").append("<option value="+tek[i].value+">"+tek[i].value+"</option>");
					fee[i].selected=true;
					$("#sprice").append("<option value="+fee[i].value*q+">"+ fee[i].value*q+"</option>");
					sum=sum+parseInt(fee[i].value)*parseInt(q);
				}
			}
			
			alert(str);
			
		}
		<!--==============================================================================-->
		
		 $("#bill").click(function(){
				document.getElementById("tbill").style.display="block";
				$("#tbill").val(sum);
			 });
		<!--====================================================================================-->
		$("#save").click(function(){
			
			str=str.substring(0,str.length-1);
			//alert(str);
			var url="ListSaveProcess.php?fid="+$("#fid").val()+"&sitems="+str+"&tbill="+$("#tbill").val();
			//alert(url);
				$.get(url,function(data,status){
					//alert(data);
					
					alert("Saved");
					});
			
			}); 
		<!--==================================================================================-->
		
		/*$("#save").click(save);
			
			function save()
			{
							alert("hello");
				str=str.substring(0,str.length-1);

         alert(str);
				var url="ListboxProcess.php?fid="+$("#fid").val()+"&item="+str+"&bill="+$("#tbill").val();
				$.get(url,function(data,status)
				{
					//$("#txtData").html(data);

        });
			}
*/ 
	});
	</script>
	
     
  </head>
  <body>
  <form id="order" method="get" action="ListSaveProcess.php">
  <div class="row" >	
  	<div class="col-md-8 col-md-offset-2">
    <center>
	  	<h2>Recieve Order</h2>
    </center>	
    </div>
  </div>
  <div class="row">
  	<div class="col-md-4 col-md-offset-4">
         <div class="form-group">
         <label for="fid">Franchise Id</label>
         
 		<input type="text" readonly value='<?php echo $_SESSION["user"]?>' class="form-control" id="fid">
		 	
         								
			</input>
		 </div>
    </div>
  </div>
  <div class="row">  
			            	<div class="col-md-4 col-md-offset-4">
                            	<div class="form-group">
									<label for="cat">Category</label>
									<select class="form-control"  id="cat" autofocus>							
									</select>
								</div>
                        </div>
                    </div>
		             
           
            <div class="row">
               <div class="col-md-2 col-md-offset-4">
					  			<label for="items">Items</label>
						  		<select class="unselected form-control"   id="items" style="height: 100px; width: 100%;" multiple="">			
									</select>
							 </div>			
							 
                <div class="col-md-2">
									<label for="price">Price</label>
								 <select class="unselected form-control" id="price" style="height: 100px; width: 100%;" multiple="">
									</select>
					    </div>
				<div class="row">		</div>
                <div class="row"></div>
                <br>
				<div class="col-md-8 col-md-offset-2">
				<center>
						<button type="button" class="btn btn-primary" id="add">Add</button>
  				</center>
                </div>
                </div>
		         <div class="row">
               <div class="col-md-2 col-md-offset-4">
					  			<label for="sitems">Selected Items</label>
						  		<select class="unselected form-control"   id="sitems" style="height: 100px; width: 100%;" multiple="">			
									</select>
							 </div>			
							 
                <div class="col-md-2">
									<label for="sprice">Price</label>
								 <select class="unselected form-control" id="sprice" style="height: 100px; width: 100%;" multiple="">
										</select>
					    </div>
						</div>
                        <div class="row"></div>
                        <br>
						<div class="row">
               				<div class="col-md-8 col-md-offset-2">
                                <center>			
                                <button type="button" class="btn btn-primary" id="bill">BILL</button>
                                </center>
                        	</div>
							
				    	</div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2"><br>
                                <center>
                                    <input type="text" id="tbill" name="tbill"></input>
                                    <br>
                                    <input type="button" class="btn btn-primary" id="save" name="save" value="Save"></input>
                                </center>
                            </div> 
                        </div>
  
  </form>
  
  
  
  
  
  
  
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>


