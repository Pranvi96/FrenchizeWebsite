<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.css" rel="stylesheet">
<style type="text/css">

	input[type="button"]
	{
		background-image:url(pics/bg13.jpg); background-repeat:no-repeat; background-size:cover; color:#FFF
		/*padding:8px;margin:5px; background-color:#F99;
		
		color:#03F; outline:none; border:none;
		border-radius:10px 10px 10px 10px;*/
	}
	/*.oke{background-color:#66FF33;}*/
</style>


<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"></script>
    
	<script type="text/javascript">
	//$(document).ready(function(e) {
		
		function Update(){
		 
		
		//alert($("#mobi").val());
		    $.get("EditProcess.php?cat="+$("#cat").val()+"&items="+$("#items").val()+"&price="+$("#price").val(),function(data,status){
		 loadALL();
		$("#dataUpdate").html(data);
		//$("#modalEdit").modal("hide");
			//$("#dataUpdate").style.display="block";
			$("#dataUpdate").css("color","#F00");
			
			});
		  
	}
		
		
		
		var global;
		//alert();
			function loadALL()
			{	//alert(); 	
				$.getJSON('ItemManagerProcess.php',function(jsonAry)
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
							
							$("#tbl").append("<tr><th>Category<th>Item<th>Price<th colspan=2>Action");
							for(i=0;i<jsonAry.length;i++)
								{
									var row=$('<tr>');
																			
									row.append("<td>"+jsonAry[i].category);
									row.append("<td>"+jsonAry[i].items);
									row.append("<td>"+jsonAry[i].price);
				row.append("<td><input type='button' value='Edit' onclick=doOpen("+i+");>");					
				row.append("<td><input type='button' id='Delete' value='Delete' onclick=doDelete("+i+")>");
									
									$("#tbl").append(row);
									
								}
							
						}
					
					
				 });
			}
			 
		function doOpen(i){
			
			$("#modalEdit").modal("show");
			$("#cat").val(global[i].category);
			$("#items").val(global[i].items);
			$("#price").val(global[i].price);
		$("#dataUpdate").html("");
			//$("#dataUpdate").style.display="none";
		
		}
		  function doDelete(index)
			 {	//alert();
				 var url="ItemManager2.php?items="+global[index].items;
				 $.get(url,function(data,status){
					 	alert(data);
						loadALL();
					 
					 });
			 }
		
		
			
		
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
    
    <!--=======================================EDIT MODAL==========================================-->
    
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-camera"></span></button>
                </div>
           <form method="get"> 
           <center>  
                <!--<h2 class="modal-title">
                <!--<font-family:'Oswald',sans-serif>
                <b><i>APPLICATION FORM</i></b></h2>
              </center></div></font>-->
             
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="cat">Category</label>
                                <input type="text" id="cat" name="cat" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                                <label for="items">Item</label>
                        <input type="text" id="items" name="items" class="form-control">
                            </div>

                        </div>
                    </div>
                   
              <div class="row">
                   	<div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                            	<label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control">
                            </div>
                    </div>
                   </div>
              
             <button type="button" class="btn btn-primary" value="Update" name="upd" id="upd" onclick="Update();">Update</button>
             <br />        		
             <div id="dataUpdate"></div>				                 
                 </div>
                </center>
        </form>
            </div><!-- /.modal-content -->
		          
          </div><!-- /.modal-dialog -->
      
      <!-- /.modal -->
    </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
   	    
</body>
</html>