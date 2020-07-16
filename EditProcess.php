<?php

session_start();
	include_once("result.php");
	$cat = $_GET["cat"];
	$items = $_GET["items"];
	$price = $_GET["price"];

					$query="update items set items='$items', price='$price' where category='$cat'";

					mysqli_query($dbcon,$query);
					$res=mysqli_affected_rows($dbcon);
					if($res!=0)
						echo "Item Updated";
					else
						echo "invalid item";
		
?>