<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Application</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="animate.css" rel="stylesheet" />
    <style>
		.oke{ color:#0C6;}
		.notoke{ color:#F00;}

		#chhotaChakkar
		{
			width:50px; height:50px;
			background-image:url(pics/animated2.gif);
			background-size:contain; background-repeat:no-repeat;
			display:none; background-position:center;
			
		}
		#andhera
		{
			width:100%;
			height:100%;
			background-color:#666666;
			opacity:.5;
			position:absolute;
			display:none;
		}
		#pay
		{
			display:none;
		}
		
		
		.carousel-inner>.item>img
		{
			width:100%;
			
			 
		}
		#signup
	{
		width:240px; padding:20px;		border:4px #000 double;
		margin:auto;
		box-shadow:15px 0px 10px #666666;
		/*display:none;*/
	}
	input[type="number"]
	{
	 background-image:;
	 margin-top:2px; 
	 background-repeat:no-repeat;
	 background-size:8%; background-color:transparent;
	 text-align:center;
	 } 
	input[type="email"]
	{
	 background-image:;
	 margin-top:2px; 
	 background-repeat:no-repeat;
	 background-size:10%; background-color:transparent;
	 text-align:center;
	  padding-left:40px;
	 } 
	input[type="text"]
	{
	 background-image:;
	 margin-top:2px; 
	 background-repeat:no-repeat;
	 background-size:10%; background-color:transparent;
	 text-align:center;
	 padding-left:40px;
	 } 
	 textarea
	{border:1px black solid; 
	 padding-left:40px; text-align:center;
	 line-height:30px;
	 background-image:;
	 background-color:transparent; 
	 background-repeat:no-repeat;
	 background-size:16%;
	 } 
	 input[type="password"]
	 {
		 	 text-align:center;
			line-height:30px;
			
	 } 
	 /*input[type="text"]:focus{ background-color:#CCC;}
	 textarea:focus{ background-color:#CCC;}
	 input[type="number"]:focus{ background-color:#CCC;}
	 input[type="email"]:focus{ background-color:#CCC;}*/
	 #errUid
	 {
		 float:left; 
	 }
	 .notOke
	 	{
			background-image:url(pics/crossBtn2.png);
			width:20px; height:20px;
			background-size:contain;
			background-repeat:no-repeat;
		}
	.Oke
	 	{
			background-image:url(pics/ok.png);
			width:20px; height:20px;
			background-size:contain;
			background-repeat:no-repeat;
		}	
		
	</style>
    <link href="scrollupdown/animate.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    
	<script type="text/javascript">
		function doShow(file)
		{
			 if (file.files && file.files[0])
		 	{
           	 	var reader = new FileReader();
            	reader.onload = function (e) {
                $('#prev').attr('src', e.target.result);
            	}
           	 reader.readAsDataURL(file.files[0]);
       	    }
		}
	</script>
     <script type="application/javascript">
		$(document).ready(function()
		 {		
		 		$(document).ajaxStart(function() {
                //$("#chakkar").css("display","block");
				//$("#andhera").css("display","block");
				
				 $("#chhotaChakkar").css("display","block");
            });
			 $(document).ajaxStop(function() {
                //$("#chakkar").css("display","none");
				//$("#andhera").css("display","none");
				$("#chhotaChakkar").css("display","none");
            });
		<!--====================================================================================-->
				
				
		 <!--==============================================================================-->
		 
		
			<!--===================================================================================-->
			
		//===============
		
		$("#uid").blur(function(){
			
				var r=/^[a-zA-Z ]*$/;
				if(r.test($("#uid").val())==false)
					//$("#errUid").html("Fill User Name...");
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
			});
			//======================================
			$("#father").blur(function(){
			
				var r=/^[a-zA-Z ]*$/;
				if(r.test($("#father").val())==false)
					//$("#errUid").html("Fill User Name...");
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
			});
			
			
			$("#mother").blur(function(){
			
				var r=/^[a-zA-Z ]*$/;
				if(r.test($("#mother").val())==false)
					//$("#errUid").html("Fill User Name...");
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
			});
			
			
			
			$("#mob").blur(function(){
				var r=/^[7-9]{1}[0-9]{9}$/;
				if(r.test($("#mob").val())==false)
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
				
				
				});	
			//===============================
			/*$("#txtPwd").blur(function(){
	var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
				if(r.test($(this).val())==false)
					{
						$(this).css("background-color","#C90");
					}
					else
					{
						$(this).css("background-color","#6F9");
						
					}
				
				
				});*/	
				$("#phone").blur(function(){
				var r=/^[7-9]{1}[0-9]{9}$/;
				if(r.test($("#phone").val())==false)
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
				
				
				});	
				//==================
				
				$("#email").blur(function(){
				var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
				if(r.test($(this).val())==false)
					{
						$(this).css("border-color","#F00");
						$("#btn").prop("disabled",true);
					}
					else
					{
						$(this).css("border-color","#360");
						$("#btn").prop("disabled",false);
					}
				
				
				});
				
				$("#apply").click(function(){
				//document.getElementById("signup").style.display= "block";
			$("#signup").slideDown(1000);
			//$("#signup").show(1000);
			//$("#signup").fadeIn(1000);
				
				});
				
        });
		
		<!--========================================================================================-->
		/*$("#close").click(doHide);
		function doHide()
				{
				//$("#signup").fadeOut(2000);	
				//$("#signup").slideUp();
				$("#signup").hide(1000);
				
				}*/ 
			
		//========================================
		
		
	//========================
	
	
		
				
				//var r=/^[a-zA-Z ]*$/; user name
				//var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/   ;  email
				//});
		
		
	</script>
  </head>
  <body style="background-color:#a94442; background-image:url(pics/study.png);  background-repeat:no-repeat;background-size:contain; marker-offset:30px; ">
    <div class="container"> 
      <nav class="navbar navbar-default navbar-fixed-top" style="background-color:transparent; border:none; color:#FFF; margin-top:0px;  background-image: url(pics/bg7.jpg); background-repeat:no-repeat; background-size:cover; opacity:1; height:50px" >
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>Student</b></a>
        </div>
        
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style=" background-image: url(pics/bg7.jpg); background-repeat:no-repeat; background-size:cover; opacity:1;">
        	 <ul class="nav navbar-nav  navbar-left" >
        <li class="active; btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF; border-right:5px;" id="apply" data-toggle="modal" data-target="#modalSignup">Student Info <span class="sr-only">(current)</span></li>
       
       
      </ul>
       <ul class="nav navbar-nav  navbar-right"  >
       <a href="internTable.php"> 
       <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent;  color:#FFF" data-toggle="modal" data-target="#"><b>View</b></</li>
       </a>
       </ul>
          </div>
        </div><!-- /.navbar-collapse -->
      <!-- /.container-fluid -->
      </nav>
   </div>
  <div class="container-fluid">        
      <div class="row" >
      	<div class="col-md-10 col-md-offset-1" style="border:#000 solid; background-color:#FFF" >
        
      
      
      <!--====================================CAROUSEL================================================-->
      
        
      
  
      <!--==============================================================================================-->
      
      
      
      <center>
      
      
      
      </center>
      <br>
      <div class="row">
      <center>
      	
                        
        
        </div>
      
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="row">
      	<div class="col-md-10 col-md-offset-1" style="color:#dbe485">
      	<hr color="#000000"/>
        	<div class="col-md-6">
            	@COPYRIGHT INFRINGEMENT 2017 | All Rights Reserved | All work originally done by 
                <b>Pranvi</b>
            </div>
            <center>
            <div class="col-md-6 " style="margin-top:-20px; margin-left:935px">
            	<div class="row">
                	<a href="https://www.facebook.com/"><img src="pics/fb.jpg" width="25" height="25"></a>
                    <a href="https://twitter.com/login"><img src="pics/twitter.png" width="25" height="25"></a>
                </div>	
            </div>
            </center>
              <br>
              <br>
        </div>
        </div>
      </div>
      </div> 
      <div align='center'><a href='http://www.free-website-hit-counter.com'><img src='http://www.free-website-hit-counter.com/c.php?d=9&id=102548&s=44' border='0' title='free website hit counter'></a><br / ><small><a href='http://www.free-website-hit-counter.com' title="free website hit counter" style="text-decoration:none; color:#dbe485">Free website hit counter</a></small></div>
 </div><!--container-fluid---->     
      <!--===================================MODAL========================================-->
     
      <div class="modal fade" id="modalSignup" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="close" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
           <form action="internProcess.php" id="mod" method="post" enctype="multipart/form-data" style="color:#000"> 
           <center>  
                <h2 class="modal-title">
                <!--<font-family:'Oswald',sans-serif>-->
                <b><i>APPLICATION FORM</i></b></h2>
              </center></div></font>
             
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="mob">Mobile</label>
                                <input type="number" id="mob" name="mob" class="form-control" placeholder="Mobile no." maxlength="13">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                                <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                   
              <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="uid">Name</label><div id="errUid"></div>
                                <input type="text" id="uid" name="uid" class="form-control" placeholder="Name">
                            </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="city" style="float:left">City(Site)</label>
                                <input type="text" id="city" name="city" class="form-control" placeholder="City">
                    </div>
                    </div>
                    
                   </div> 
                   <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="add">Address</label><rows="3" cols="20">
                                <textarea input type="text" id="add" name="add" class="form-control" placeholder="Address"></textarea>
                            </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="loc" style="float:left">Location</label><rows="3" cols="20">
                                <textarea id="loc"  name="loc" class="form-control" placeholder="Location"></textarea>
                    </div>
                    </div>
                    
                   </div> 
                   <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="size">College(School)</label>
                                <input type="text" id="size" name="size" class="form-control" placeholder="College">
                       </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="inc" style="float:left">Age</label>
                                <input type="number" id="inc" name="inc" class="form-control" placeholder="Age" max="100">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="father">Father's Name</label>
                                <input type="text" id="father" name="father" class="form-control" placeholder="Father's Name">
                       </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="mother" style="float:left">Mother's Name</label>
                                <input type="text" id="mother" name="mother" class="form-control" placeholder="Mother's Name">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="phone">Guardian Phone no.</label>
                                <input type="number" id="phone" name="phone" class="form-control" placeholder="Guardian Phone no.">
                       </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="sibling" style="float:left">Sibling(Name,Age)</label>
                                <input type="text" id="sibling" name="sibling" class="form-control" placeholder="Sibling">
                    </div>
                    </div>
                    </div>
                    <div class="row">
                   	<div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                            	<label for="medical">Medical Problem(if any)</label>
                                <input type="text" id="medical" name="medical" class="form-control" placeholder="Medical Problem(if any)">
                       </div>
                    </div>
                    </div>
                         <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                                    
                                <label for="pic">Id Proof</label>
                                <input type="file" name="pic" id="pic" onchange="doShow(this);" />
                        </fdiv>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                                  <img src="pics/nopic.png" width="80" height="80"  id="prev" style="float:left"/>
                                
                               
                        </div>
                        </div>  
                           
                    </div>
                    
                <center>
                <div>
                <button type="submit" class="btn btn-primary" value="Save" id="btn" name="btn">Save</button>        						                  </div>
                </center>
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
  </body>
</html>


