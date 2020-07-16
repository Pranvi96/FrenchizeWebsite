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
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="application/javascript">
		$(document).ready(function()
		{
			$("#Update").click(function(e) {
		 
		
		//alert($("#mobi").val());
		    $.get("FranchiseConsoleProcess.php?new="+$("#new").val()+"&old="+$("#old").val(),function(data,status){
		
		$("#dataUpdate").html(data);
			});
		  });
		  
		  <!--========================================LOGOUT========================================-->
		  $("#logout").click(function(){
			
						window.location="logoutProcess.php";
					  });
		});
    </script>
         
  </head>
  <body style="background-image:url(pics/bg19.jpg); background-repeat:no-repeat; background-size:cover">
  <div class="row"></div>
  <div class="row" style="margin-left:70px; margin-top:20px">
  <div class="row">
  <?php
		session_start();
		if(!isset($_SESSION["user"]))
			header("Location:appfront.php");
		
	?>
<center><h1>WELCOME:<?php echo $_SESSION["user"]; ?></h1></center>
<div class="btn btn-default" id="logout" style="margin-left:1350px; margin-top:-100px">Logout</div>
  </div>
  <br><br><br><br><br>
  
  	<div class="row">
          <div class="col-md-4 col-md-offset-1" >
          <center>
            <div class="thumbnail" style="background-image:url(pics/b.jpg); background-repeat:no-repeat; background-size:cover; width:400px; height:300px" >
            <br>
              <img src="pics/setting1.jpg" alt="...">
              <div class="caption">
                
                <p><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalPwd">Settings</button></p>
                <br><br><br>
              </div>
            </div>
          </center>
          </div>
          <div class="col-md-4 col-md-offset-2">
          <center>
            <div class="thumbnail" style="background-image:url(pics/b.jpg); background-repeat:no-repeat; background-size:cover; width:400px; height:300px">
            <br>
              <img src="pics/recOrder.png" alt="...">
              <div class="caption">
                
                <p><button type="submit" class="btn btn-primary"><a href="Listbox.php" style="text-decoration:none; color:#FFF"> Recieve Order</a></button></p>
                <br><br><br>
              </div>
            </div>
          </center>
          </div>
          
        </div>
   
  	 
     
  </div> 
  
  
  
  <!--==============================================================================================-->
  <div class="modal fade" id="modalPwd" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
           <form action="FranchiseConsoleProcess.php" method="post" enctype="multipart/form-data">   
               <!-- <h2 class="modal-title"><b><i>APPLICATION FORM</i></b></h2>-->
              </div>
             <center>
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="old">Old Password</label>
                                <input type="password" id="old" name="old" class="form-control" placeholder="Enter your old password">
                                <br>
                                <label for="new">New Password</label>
                                <input type="password" id="new" name="new" class="form-control" placeholder="Enter your new password">
                                <div class="row">       </div>
                                
                                
                            </div>
                        </div>
                    </div>
                 
              
      			</div><button type="button" class="btn btn-primary" value="Update" id="Update" name="Update">Update</button>
                
                <div class="row" id="dataUpdate">      </div>   
                <br>     	  
        </form>
            </div><!-- /.modal-content -->
		          
          </div><!-- /.modal-dialog -->
      
      <!-- /.modal -->
    </div>     
      
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>


