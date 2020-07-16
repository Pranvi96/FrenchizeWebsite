<?php
	session_start();//session array created

	include_once("result.php");
	$User=$_GET["uid"];
	$Password=$_GET["pwd"];
			$query="select * from franchise where pwd='$Password' AND uid='$User' ";
			$result=mysqli_query($dbcon,$query);
			$err=mysqli_error($dbcon);
			if($err=="")
			{
				if(mysqli_num_rows($result)==1)
				{
					$_SESSION["user"]=$User;
					
						echo "Registered";
						
				}
				else
						echo"Not Registered" ;
			}
			else
				echo $err;
	
?>