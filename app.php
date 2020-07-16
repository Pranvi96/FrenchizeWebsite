<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="WOWSlider" />
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
		#status
		{
			text-align:center;
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
				
				$("#check").click(function(e) {
		 
		
		//alert($("#mobi").val());
		    $.get("chkStatus.php?mob="+$("#mobi").val(),function(data,status){
		//alert(data);
			//$("#status").html(data);
			
			
			/*if(data=="Available")
			{
						$("#status").html(data).removeClass("notoke").addClass("oke");
						$("#pay").show();
			}else
						$("#status").html(data).removeClass("oke").addClass("notoke");*/
			if(data=="Approved")
			{
			 $("#status").show();
			 //alert(data);
			$("#status").html("Status:"+data);
			//alert(data);
			$("#status").css("color","#093");
			//alert(data);
				$("#pay").css("display","block");
			}
			if(data=="Rejected")
			{
			 $("#status").show();
			$("#status").html("Status:"+data);
			$("#status").css("color","#F00");
			
				//$("#pay").css("display","block");
			}
			if(data=="Pending")
			{
			 $("#status").show();
			$("#status").html("Status:"+data);
			$("#status").css("color","#06F");
			
				//$("#pay").css("display","block");
			}
		   });
		   
		 });
		 <!--==============================================================================-->
		 
		 $("#pay").click(function(){
			 //alert($("#mobi").val());
			 $("#mobile").val($("#mobi").val());
		 });
		 <!--==============================================================================-->
		$("#chks").click(function(){
			// alert($("#mobi").val());
			 $("#mobile").val($("#mobi").val());
			 //alert();			
			//var all="AJAXSaveProcess.php?uid="+$("#txtUid").val()+"&pwd="+$("#pwd").val();
			var allData=$("#payfrm").serialize();
			//alert();
			var url="paymentProcess.php?"+allData+"&jasus=Proceed";
				$.get(url,function(data,status){
					alert(data);
					});
			
			});
			
			<!--===================================================================================-->
			$("#login").click(function(){
			//var jasus;
			
			var url="LoginProcess.php?uid="+$("#uid1").val()+"&pwd="+$("#pwd1").val();
			
			//alert();
			//var url="OwnerConsoleProcess.php?"+allData+"&jasus=Save";
				$.get(url,function(data,status){
					//alert(data);
					alert(data);
					if(data=="Registered")
					{	    
						if($("#own").prop("checked"))
					  {
						  window.location="ownerConsole.php";
						  }
						  
					else
					if($("#fran").prop("checked"))
					{
						
						window.location="FranchiseConsole.php";
						}
					}
					else 
					if(data=="Not Registered")
					{
						window.location="appfront.php";
						 alert("Register first");
						
						}  
							 });
					  
					  });
				
					
		//===============
		
		/*$("#uid").blur(function(){
			
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
			});*/
			//======================================
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
    
   <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine0/style.css" />
    <script type="text/javascript" src="engine0/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
	</head>
  <body style="background-color:#a94442; overflow-x:hidden">
	
	
	
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
          <a class="navbar-brand" href="#"><b>GFP</b></a>
        </div>
        
        <!--
        <ul class="nav navbar-nav">
            <li class="btn btn-default glyphicon glyphicon-apple " style="border:none; background-color:transparent; color:#FFF; border-right:5px;" id="apply" data-toggle="modal" data-target="#modalSignup"><b>Apply</b></li>
            <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF" data-toggle="modal" data-target="#modalStatus"><b>Check Status</b></li>
            <li class="btn btn-default glyphicon glyphicon-apple " style="border:none; background-color:transparent; color:#FFF"><a href="#about" style="text-decoration:none; color:#FFF"><b>About Us</b></a></li>
            <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF"><a href="#contact" style="text-decoration:none; color:#FFF"><b>Contact Us</b></a></li>
            <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent;  color:#FFF" data-toggle="modal" data-target="#modalLogin"><b>Login</b></li>
            </ul>
        -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style=" background-image: url(pics/bg7.jpg); background-repeat:no-repeat; background-size:cover; opacity:1;">
        	 <ul class="nav navbar-nav  navbar-left" >
        <li class="active; btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF; border-right:5px;" id="apply" data-toggle="modal" data-target="#modalSignup">Apply <span class="sr-only">(current)</span></li>
        <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF" data-toggle="modal" data-target="#modalStatus"><b>Check Status</b></li>
        <li class="btn btn-default glyphicon glyphicon-apple " style="border:none; background-color:transparent; color:#FFF"><b><a href="#about" style="text-decoration:none; color:#FFF">About Us</a></b></li>
       <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent; color:#FFF"><b><a href="#contact"  style="text-decoration:none; color:#FFF">Contact Us</a></b></li>
      </ul>
       <ul class="nav navbar-nav  navbar-right" >
       <li class="btn btn-default glyphicon glyphicon-apple" style="border:none; background-color:transparent;  color:#FFF" data-toggle="modal" data-target="#modalLogin"><b>Login</b></li>
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
      
      <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container0">
<div class="ws_images"><ul>
		<li><img src="data0/images/fr.jpg" alt="fr" title="fr" id="wows0_0"/></li>
		<li><img src="data0/images/icecr2.jpg" alt="icecr2" title="icecr2" id="wows0_1"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/icecr3.jpg" alt="jquery carousel" title="icecr3" id="wows0_2"/></a></li>
		<li><img src="data0/images/pizza4.jpg" alt="pizza4" title="pizza4" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="fr"><span><img src="data0/tooltips/fr.jpg" alt="fr"/>1</span></a>
		<a href="#" title="icecr2"><span><img src="data0/tooltips/icecr2.jpg" alt="icecr2"/>2</span></a>
		<a href="#" title="icecr3"><span><img src="data0/tooltips/icecr3.jpg" alt="icecr3"/>3</span></a>
		<a href="#" title="pizza4"><span><img src="data0/tooltips/pizza4.jpg" alt="pizza4"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">javascript carousel</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine0/wowslider.js"></script>
<script type="text/javascript" src="engine0/script.js"></script>
<!-- End WOWSlider.com BODY section -->

      
  
  
      <!--==============================================================================================-->
      <hr color="#000000">
      <center>
      <div id="about"></div> 
      <div class="row" style="background-image:url(pics/bg11.jpg); background-repeat:no-repeat; background-size:cover; color:#FFF; height:50px; border:#000 solid">
      <div style="margin-top:15px; font-family:Lucida Handwriting; font-size:18px" >
      <marquee bgcolor="transparent" behavior="alternate" width="700" height="80"  scrollamount="15" scrolldelay="5" onMouseOver="stop();" onMouseOut="start();"><b>ABOUT US</b>
      </marquee>
      </div>
      </div>
      </center>
      <br>
      <div class="row"  style=" background-repeat:no-repeat; background-size:cover; color:#000;">
      <center>
      	
        <div class="col-md-6" style="background-color:#FFF"> 
       		<div class="col-md-10 col-md-offset-1"  style="background-color:#036; color:#FFF; border:#F00 solid; margin-top:5px; margin-bottom:5px; box-shadow:-1px -1px 20px 5px #000000">
            <center>
                <div class="row">
                    <div class="col-md-12">
                        <b><i><h3 style="font-family:Algerian;font-size:24px;">Developed By:</h3></i></b>
                    </div>
                </div>
                <div class="row">
                    	<div class="col-md-10 col-md-offset-1">
                        <div class="img-circle">
                            <img src="pics/me1.jpg" width="300" height="300" style="border:#d60a44 solid" class="img img-circle">
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-12">
                        <h4 style="font-family:Algerian;font-size:24px;">Pranvi</h4>
                    </div>
               </div>
          </center>
      </div>
        </div>
        
        <div class="col-md-6" style="background-color:#FFF"> 
       		<div class="col-md-10 col-md-offset-1"  style="background-color:#036; color:#FFF; border:#F00 solid; margin-top:5px; margin-bottom:5px; box-shadow:-1px -1px 20px 5px #000000">
            <center>
                <div class="row">
                    <div class="col-md-12">
                        <b><i><h3 style="font-family:Algerian; font-size:24px">Under Guidance Of:</h3></i></b>
                    </div>
                </div>
                <div class="row">
                    	<div class="col-md-10 col-md-offset-1">
                        <div class="img-circle">
                            <img src="pics/sir.jpg" width="300" height="300" style="border:#d60a44 solid; box-shadow:" class="img img-circle">
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-md-12">
                        <h4 style="font-family:Algerian;font-size:24px;">Rajesh Kumar Bansal</h4>
                    </div>
               </div>
          </center>
      </div>
        </div>
 </div>
      <center>
      <br>
      <div id="contact"></div>
      <div class="row" style="background-image:url(pics/bg11.jpg); background-repeat:no-repeat;background-size:cover; color:#FFF; height:50px; border:#000 solid">
      <div style="margin-top:15px; font-family:Lucida Handwriting; font-size:18px" >
      <marquee bgcolor="transparent" behavior="alternate" width="700" height="80"  scrollamount="15" scrolldelay="5" onMouseOver="stop();" onMouseOut="start();"  ><b>CONTACT US</b></marquee>
      
      </div>
      </div>
      </center>
      <br>
      <div class="row">
      <center>
      	
                        <div class="col-md-6" style="background-color:#FFF"> 
       		<div class="col-md-10 col-md-offset-1"  style="background-color:#036; color:#FFF; border:#F00 solid; margin-top:5px; margin-bottom:25px; box-shadow:-1px -1px 20px 5px #000000">
            <center>
                <div class="row">
                    <div class="col-md-12">
                       <br>
                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8837109835827!2d74.95005951498682!3d30.211866317599206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f07278a9%3A0x4a0d6293513f98ce!2sBanglore+Computer+Education!5e0!3m2!1sen!2sin!4v1500528770404" width="450" height="450" style="margin-bottom:15px; border:#a94442 ridge; "  frameborder="0"  allowfullscreen></iframe> 
                    </div>
                </div> 
          </center>
      </div>
        </div>
        <div class="col-md-6" style="background-color:#FFF"> 
       		<div class="col-md-10 col-md-offset-1"  style="background-color:#036; color:#FFF; border:#F00 solid; margin-top:5px; margin-bottom:10px; box-shadow:-1px -1px 20px 5px #000000">
            <center>
                <div class="row">
                    <div class="col-md-12">
                       <br>
                	<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFranchise-Portal-107352646521618%2F&tabs=timeline&width=450&height=450&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="450" height="450" style="border:#a94442 ridge;overflow:hidden; margin-bottom:15px" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
                </div>
               
          </center>
      </div>
        </div>
      
      </div>
      <div class="row">
      	<div class="col-md-10 col-md-offset-1" style="color:#dbe485">
      	<hr color="#000000"/>
        	<div class="col-md-6" style="width:inherit">
            	@COPYRIGHT INFRINGEMENT 2017 | All Rights Reserved | All work originally done by <b>Pranvi</b>
            </div>
            <center>
            <div class="col-md-6 " style="margin-top:-20px; margin-left:905px">
            	<div class="row">
                	<a href="https://www.facebook.com/"><img src="pics/fb.jpg" width="25" height="25"></a>
                    <a href="https://twitter.com/login"><img src="pics/twitter.png" width="25" height="25"></a>
                </div>	
            </div>
            </center>
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
           <form action="ApplyProcess.php" id="mod" method="post" enctype="multipart/form-data" style="color:#000"> 
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
                            	<label for="size">Size</label>
                                <input type="text" id="size" name="size" class="form-control" placeholder="Size">
                       </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                            	
                                <label for="inc" style="float:left">Annual Income</label>
                                <input type="text" id="inc" name="inc" class="form-control" placeholder="Annual Income">
                    </div>
                    </div>
                    </div>
                         <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                        <div class="form-group">
                                    
                                <label for="pic">Id Proof</label>
                                <input type="file" name="pic" id="pic" onchange="doShow(this);" />
                        </div>
                        </div>
                        <div class="col-md-4">
                        <div class="form-group">
                                  <img src="pics/nopic.png" width="80" height="80"  id="prev" style="float:left"/>
                                
                               
                        </div>
                        </div>  
                           
                    </div>
                    <div class="row">
                   	<div class="col-md-4 col-md-offset-2">
                    <div class="form-group">
                            	<label for="stat">Status</label>
                                <input type="tel" value="1" readonly id="stat" name="stat" class="form-control" placeholder="Size">
                       </div>
                    </div>
                   <br><br>
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
      
         <!--==============================CHECK STATUS===================================-->
     
      <div class="modal fade" id="modalStatus" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-camera"></span></button>
          <center>
          <div>
          	<img src="pics/chkstatus.jpg">
          </div>
          </center>
          <center>
          	<div class="row">
            	<div class="col-md-8 col-md-offset-2">
                	<b><i><h3>STATUS</h3></i></b>
                </div>
            </div>
          </center>
            <form action="chkStatus.php" method="post" enctype="multipart/form-data">   
                </div>
             
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="mobi">Mobile</label>
                                <input type="tel" id="mobi" name="mobi"  class="form-control" placeholder="Mobile no.">
                            </div>
                        </div>
                    </div>
                    
                   
               
               <center>
               <div class="row">    
      		<input type="button" class="btn btn-primary" id="check" value="Check" name="check"></input> 
            	</div>
                </center>
            <div class="row">
                    	<div class="col-md-8 col-md-offset-2" >
                        	<div class="form-group">
                         
                            	<div id="status" name="status" style="margin-bottom:10px;display:none;"placeholder="Status" /><br><b>Status</b></div>
                                <div id="chhotaChakkar" ></div> 
                                <div id="andhera"></div>
                               <!-- <center>
               					<div class="row">--> 
                                <button type="button" class="btn btn-primary" id="pay"  data-toggle="modal" data-target="#paychk" style="float:left">Payment</button>
                                <!--</div>
                				</center>-->
                            </div>
                        </div>
                    </div>       
        </form>
            </div><!-- /.modal-content -->
		          
          </div><!-- /.modal-dialog -->
      
      <!-- /.modal -->
    </div>    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   </div>
  
      <!--=====================================PAY MODEL========================================-->
  
 
    <div class="modal fade" id="paychk" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   <form id="payfrm" action="paymentProcess.php">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-bell"></span></button>
        <center>
        <div class="row">
        <h4 class="modal-title"><b><i>Payment</i></b></h4>
        </div>
        </center>
      </div>
      <div class="modal-body">
          
          
<div class="row">
   <div class="col-md-8 col-md-offset-2">
     <label for="mobile">Mobile</label>
     <input type="tel" id="mobile" name="mobile" style="margin-bottom:10px" class="form-control" placeholder="Mobile" />
   </div>
</div>

<div class="row">
   <div class="col-md-8 col-md-offset-2">
     <label for="date">Date</label>
     <input type="date" id="date" name="date" style="margin-bottom:10px" class="form-control" placeholder="Date"  autofocus/>
   </div>
</div>

<div class="row">
   <div class="col-md-8 col-md-offset-2">
     <label for="amt">Amount</label>
     <input type="tel" id="amt" name="amt" style="margin-bottom:10px" class="form-control" placeholder="Amount" />
   </div>
</div>

<div class="row">
   <div class="col-md-8 col-md-offset-2">
     <label for="acno">Acc. no.</label>
     <input type="tel" id="acno" name="acno" style="margin-bottom:10px" class="form-control" placeholder="Account No." />
   </div>
</div>

<div class="row">
   <div class="col-md-8 col-md-offset-2">
     <label for="trans">Transaction Id</label>
     <input type="tel" id="trans" name="trans" style="margin-bottom:10px" class="form-control" placeholder="Transaction id" />
   </div>
</div>
      </form>
      
      
      </div>
      <div class="modal-footer">
 
      <div class="row">
   <div class="col-md-3 col-md-offset-4">
      <button type="button" class="btn btn-warning"  value="Proceed" id="chks" style="margin-bottom:10px" >Proceed</button>
   </div>
</div>

       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

      <!--=======================================LOGIN=============================================-->
	
      <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="glyphicon glyphicon-remove-circle"></span></button>
                <center>
              <div>
              	<img src="pics/login.jpg">
              </div>
              </center>
           <form action="LoginProcess.php" method="get" >   
               <!-- <h2 class="modal-title"><b><i>APPLICATION FORM</i></b></h2>-->
              </div>
             <center>
              <div class="modal-body">
               		<div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<div class="form-group">
                            	<label for="uid1">User ID</label>
                                <input type="tel" id="uid1" name="uid1" class="form-control" placeholder="Enter your id" autofocus style="text-align:center">
                                <label for="pwd1">Password</label>
                                <input type="password" id="pwd1" name="pwd1" class="form-control" placeholder="Enter your password">
                                <div class="row">       </div>
                                <br>
                                <div class="row">
                                <input type="radio" id="own" name="own">Owner</input>
                                <input type="radio" id="fran" name="own" style="margin-left:30px">Franchise</input>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- <div class="row">
                 	<center>
                    	<div class="col-md-8 col-md-offset-2">
                        	<h4>FORGOT PASSWORD</h4>
                        </div>
                    </center>
                 </div>-->
              
      			</div><button type="button" class="btn btn-primary" id="login" value="Login" name="btn">Login</button>
                <div class="row">      </div>
                <br><br>        	  
        </form>
            </div><!-- /.modal-content -->
		          
          </div><!-- /.modal-dialog -->
      
      <!-- /.modal -->
    </div>
    </center>
      
      
        <script src="js/jquery-1.12.3.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  </body>
</html>


