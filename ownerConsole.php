<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OwnerConsole</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script type="text/javascript">
    
    	$(document).ready(function(e) {
        
		$("#save").click(function(){
			//var jasus;
			//var all="AJAXSaveProcess.php?uid="+$("#txtUid").val()+"&pwd="+$("#pwd").val();
			var allData=$("#process").serialize();
			//alert(allData);
			var url="OwnerConsoleProcess.php?"+allData+"&jasus=Save";
				$.get(url,function(data,status){
					//alert(data);
					alert("Saved");
					});
			
			});
			<!--=================================LOGOUT===========================================-->
			$("#logout").click(function(){
			
						window.location="logoutProcess.php";
					  });
		});
   
    </script>
    
  </head>
  <body style="background-image:url(pics/bg3.jpg); background-repeat:no-repeat; background-size:cover; overflow-x:hidden">
  <!--style="background-image:url(pics/pizza.jpg); background-repeat:repeat-x; background-position:bottom"
  border-image-repeat:repeat; border-image:url(pics/pizza.jpg)
  -->
   <center>
     <?php
		session_start();
		if(!isset($_SESSION["user"]))
			header("Location:appfront.php");
		
	?>
<center><h1>WELCOME:<?php echo $_SESSION["user"]; ?></h1></center>
      <div class="row">
      	<div class="row"><b><h1><i>Owner's Console</i></h1></b>
        	<div class="btn btn-default" id="logout" style="margin-right:-1450px; margin-top:-200px">Logout</div>
        </div>
      </div>
      <!--<div class="row" style="color:#000">
      
     <div class="btn btn-default" style="margin-left:5px;"><a href="JSONgridFront.php">Applications</a></div>
        	
      <div class="btn btn-default"><a href="makeFranchise.php">Confirm Payment</a></div>
      <div class="btn btn-default" data-toggle="modal" data-target="#modalItemMaster">Items Master</div>
      <div class="btn btn-default">Items Manager</div>
      </div>
      <div class="row">
      	<div class="btn btn-default">Sale History</div>
      </div>-->
      <!--======================================CAROUSEL=========================================-->
      
     
      <!--======================================THUMBNAILS=======================================-->
      
        <div class="row">
          <div class="col-md-2 col-md-offset-1" >
            <div class="thumbnail" style="background-image:url(pics/bg6.jpg)">
              <img src="pics/app2.jpg"alt="...">
              <div class="caption">
                
                <p><a href="JSONgridFront.php" class="btn btn-primary" role="button">Applications</a> </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-2">
            <div class="thumbnail" style="background-image:url(pics/bg6.jpg)">
              <img src="pics/confirmpay.jpg" width="281" height="179" alt="...">
              <div class="caption">
                
                <p><a href="makeFranchise.php" class="btn btn-primary" role="button">Confirm Payment</a> </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-2" style="margin-right:20px">
            <div class="thumbnail" style="background-image:url(pics/bg6.jpg)">
              <img src="pics/fran.jpg" width="281"  alt="...">
              <div class="caption">
                
                <p><a href="franTable.php" class="btn btn-primary" role="button">Franchise</a> </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2 col-md-offset-1">
            <div class="thumbnail" style="background-image:url(pics/bg6.jpg)">
              <img src="pics/order.jpg" width="281" height="179" alt="...">
              <div class="caption">
                
                <p><a href="#" class="btn btn-primary" role="button"  data-toggle="modal" data-target="#modalItemMaster">Items Master</a> </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-2">
            <div class="thumbnail" style="background-image:url(pics/bg6.jpg)">
              <img src="pics/itemanager.jpg" width="281" height="179" alt="...">
              <div class="caption">
                
                <p><a href="ItemManager.php" class="btn btn-primary" role="button">Item Manager</a> </p>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-md-offset-2">
            <div class="thumbnail"  style="background-image:url(pics/bg6.jpg);">
              <img src="pics/vieworder.jpg" width="281" height="179" alt="...">
              <div class="caption">
                <!--<h3></h3>
                <p>...</p>-->
                <p><a href="salehistory.php" class="btn btn-primary" role="button">View Order</a> </p>
              </div>
            </div>
          </div>
        </div>
      
      <!--======================================Item Master======================================-->
      
      <div class="modal fade" id="modalItemMaster" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-camera"></span></button>
            <form action="OwnerConsoleProcess.php" id="process">
            
   <!--action="OwnerConsoleProcess.php" method="post" enctype="multipart/form-data"            
       -->         </div>
             
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="cat">Category</label>
                                <input type="text" id="cat" name="cat" class="form-control" placeholder="Add Category">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="item">item</label>
                                <input type="text" id="item" name="item" class="form-control" placeholder="Add Item">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="price">Price</label>
                                <input type="text" id="price" name="price" class="form-control" placeholder="Add Price">
                            </div>
                        </div>
                    </div>
               		</div><button type="button" class="btn btn-primary"  id="save" name="save" value="Save" name="btn">Save</button>
                   
      		
                    	   
        </form>
            </div><!-- /.modal-content -->
		          
          </div><!-- /.modal-dialog -->
      
      <!-- /.modal -->
    </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   </div>
      
      </center>
      
      
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </center>
  </body>
</html>


