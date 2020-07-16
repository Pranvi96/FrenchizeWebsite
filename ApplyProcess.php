<?php
	include_once("result.php");
	
	if($_POST["btn"]=="Save")
		doSave($dbcon);
	function doSave($dbcon)
	{
	$stat=$_POST["stat"];
	$mob=$_POST["mob"];
	$uid=$_POST["uid"];
	$city=$_POST["city"];
	$add=$_POST["add"];
	$loc=$_POST["loc"];
	$size=$_POST["size"];
	$inc=$_POST["inc"];
	$email=$_POST["email"];
	$orgname=$_FILES["pic"]["name"];
	$tempname=$_FILES["pic"]["tmp_name"];
	$size=$_FILES["pic"]["size"];
	$type=$_FILES["pic"]["type"];
	
	//echo "$orgname  $size   $tempname   $type";
	//$nname=$orgname."".$uid;
	move_uploaded_file($tempname,"uploads/".$orgname);
	//echo "<br>file uploaded...";
	$query="insert into app       values('$mob','$uid','$city','$add','$loc','$size','$inc','$orgname','$stat','$email')";
	
	mysqli_query($dbcon,$query);
	
	if(mysqli_error($dbcon)=="")
		echo " <h1>Signed up.....</h1>";
	else
	   echo mysqli_error($dbcon);
		
	}
	
	
		 
?>