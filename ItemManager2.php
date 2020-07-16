<?php

include_once("result.php");
//if($_POST["Delete"]=="Delete")
		doDelete($dbcon);	
		
		
	function doDelete($dbcon)
	{
	$items=$_GET["items"];
	
	$query="delete from items where items='$items'";
	
	mysqli_query($dbcon,$query);
	
	if(mysqli_error($dbcon)=="")
	{
		$count=mysqli_affected_rows($dbcon);
		if($count!=0)
			echo "Record Deleted.....";
		else
			echo "Invalid item.....";	
	}
	else
	   echo mysqli_error($dbcon);
		
	}
?>