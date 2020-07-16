<?php
	
	include_once("result.php");
	//if($_POST["save"]=="Save")
	//doSave($dbcon);
		//$jasus=$_GET["jasus"];
	if($_GET["jasus"]=="Save")
		doSave($dbcon);
	else
		echo "bvjh";

	function doSave($dbcon)
	{
	$cat=$_GET["cat"];
	$item=$_GET["item"];
	$price=$_GET["price"];
	
	
	echo "$cat $item $price";
	$query="insert into item values('$cat','$item','$price')";
	
	mysqli_query($dbcon,$query);
	
	/*if(mysqli_error($dbcon)=="")
		echo " <h1>Saved.....</h1>";
	else
	   echo mysqli_error($dbcon);
		*/
	}
	
?>