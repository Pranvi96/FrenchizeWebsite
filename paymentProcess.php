<?php
 include_once("result.php");
 // include_once("SMS_OK_sms.php");
 if($_GET["jasus"]=="Proceed")
		doSave($dbcon);

	function doSave($dbcon)
	{
	$mobile=$_GET["mobile"];
   $date=$_GET["date"];
   $amount=$_GET["amt"];
   $accno=$_GET["acno"];
   $trans=$_GET["trans"];
   
   $query="insert into pay values('$mobile','$date','$amount','$accno.','$trans')";
   mysqli_query($dbcon,$query);
			if(mysqli_error($dbcon)==""){
					//$msg="Your total amount= $amount<br>Date=$date<br>Account no.=$accno<br>Transaction Id=$trans";
					//$resp= SendSMS($mobile,$msg);
					//if($resp=="sent")
					echo $resp."Payment successful !";
					$query="update app set status=3 where mobile=$mobile";
					mysqli_query($dbcon,$query);
			}
		 else
			   echo mysqli_error($dbcon);
	} 
?> 
 