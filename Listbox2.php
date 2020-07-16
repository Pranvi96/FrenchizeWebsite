<!DOCTYPE html>
<html lang="en">
  <head>
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
		
		var global,sum=0;
	 	$(document).ready(function()
	{	//alert();
		//$("#cat").change(items);		
		//$("#cat").change(price);
		//$("#cat").empty();
		//$("#items").empty();
			/*$.getJSON('ListboxProcess.php',function(jsonAry)
			 	{	//alert();
					global=jsonAry;
					var lookup = {};
					var tt=$("#cat").val();
					//alert(JSON.stringify(jsonAry));
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
						{
							//alert(jsonAry.length);
							$("#cat").empty();
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
								//items();
								//price();
								//alert();
										
						}
				 });*/
		<!--===================================================================================-->
		
		//$("#recOrder").click(function(){
				$.getJSON('ListboxProcess.php',function(jsonAry)
				{	
					if(jsonAry[0].msg=="norecord")
						return;
					global=jsonAry;
					
					if(jsonAry.length==0)
						alert("No Record Found");
					else
					{	//alert();
						$("#cat").empty();
						$("#cat").append("<option value='none'>Select</option>");
						for(i=0;i<jsonAry.length;i++)
						{
							$("#cat").append("<option value='"+global[i].category+"'>"+global[i].category+"</option>");
							//alert();
						}
					}
				//}
				});	
			//});

		
		<!--===================================================================================-->
		$("#cat").change(function(){
				var categ=$("#cat").val();
				
					//alert();
					$.getJSON('ItemProcess.php?cat='+category,function(jsonAry)
					{	alert();
						if(jsonAry[0].msg=="norecord")
							return;
						global=jsonAry;
						
						if(jsonAry.length==0)
							alert("No Record Found");
						else
						{	alert();
							$("#items").empty();
							$("#price").empty();
							//$("#items").prop("disabled",false);
							//$("#price").prop("disabled",false);
							for(i=0;i<jsonAry.length;i++)
							{
								$("#items").append("<option value="+global[i].items+">"+global[i].items+"</option>");
								$("#price").append("<option value='"+global[i].price+"'>"+global[i].price+"</option>");
							}
						}
						
					});	
				
				
				
			
			});
			
			<!--===========================================================================-->
			var str="";
			$("#add").click(doAdd);
        	function doAdd()
			{
				var q=prompt("Enter Quantity");
				var i;
				var items= document.getElementById("items");
				var price= document.getElementById("price");
				
				for(i=0;i<items.length;i++)
				{
					if(items[i].selected==true)
					{
						str+=items[i].value+",";
						$("#sitems").append("<option value="+items[i].value+">"+items[i].value+"</option>");
						$("#sprice").append("<option value="+price[i].value*q+">"+price[i].value*q+"</option>");
						items[i].selected=false;
					}
				}
			}
			
	<!--===========================================================================================-->
	
			
	});
	
	</script>
	
     
  </head>
  <body>
  <form id="order">
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
         	<input type="text"  id="fid" name="fid">							
			</input>
		 </div>
    </div>
  </div>
  <div class="row">  
			            	<div class="col-md-4 col-md-offset-4">
                            	<div class="form-group">
									<label for="cat">Category</label>
									<select class="form-control"  id="cat">							
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
                                    <button type="button" class="btn btn-primary" id="save" name="save" value="Save">Save</button>
                                </center>
                            </div> 
                        </div>
  
  </form>
  
  
  
  
  
  
  
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>


