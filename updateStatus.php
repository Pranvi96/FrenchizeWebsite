<?php
include_once("result.php");
include_once("SMS_OK_sms.php");
$mobi=$_GET["mobile"];
$what=$_GET["what"];
//$mobi="9464464133";
//$what="4";


	//echo mysqli_error($dbcon);
	if(mysqli_error($dbcon)==""){
		
			$query="insert into franchise(uid,pwd,name,mobile,location,city,state,email)
			select mobile,mobile,name,mobile,location,city,city,email from app where mobile='$mobi'";
			mysqli_query($dbcon,$query);
			$quer="update app set status=$what where mobile='$mobi'";
			$msg="Your uid= $mobi pwd=$mobi";
			$resp= SendSMS($mobi,$msg);
			echo $resp;
			if($resp=="sent")
			mysqli_query($dbcon,$query);
			$res=mysqli_affected_rows($dbcon);
			 if($res!=0)
				echo "Updated";
			 else
				echo "invalid id";			
			}
		 else
			   echo mysqli_error($dbcon);
?>

