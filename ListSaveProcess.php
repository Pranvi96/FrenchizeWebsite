<?php
include_once("result.php");
	echo("bcbjh");
	
	$fid=$_GET["fid"];
	$sitems=$_GET["sitems"];
	$tbill=$_GET["tbill"];
	
	
	
	//echo "$cat $item $price";
	$query="insert into orders values('$fid','$sitems','$tbill',CURDATE())";
	
	mysqli_query($dbcon,$query);
	if(mysqli_error($dbcon)=="")
		echo " <h1>Saved.....</h1>";
	else
	   echo mysqli_error($dbcon);
	
?>