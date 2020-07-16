<?php

session_start();
	include_once("result.php");
	$old = $_GET["old"];
	$new = $_GET["new"];
	$uid = $_SESSION["user"];

					$query="update franchise set pwd='$new' where pwd='$old' and uid='$uid'";

					mysqli_query($dbcon,$query);
					$res=mysqli_affected_rows($dbcon);
					if($res!=0)
						echo "Updated";
					else
						echo "invalid password";
		
?>