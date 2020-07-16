<?php
 include_once("result.php");

   $mob=$_GET["mob"];
		
	
	$query="select status from app where mobile='$mob'";
	
	$result=mysqli_query($dbcon,$query);
	
	$err=mysqli_error($dbcon);
	$all="";
	if($err=="")
			{
				//echo mysqli_num_rows($result);
				if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_array($result))
						{
							$all=$row["status"];
						}
						//echo $all;
							if($all==0)
							{
								echo "Pending";
								}
							
							if($all==1)
							{
								echo "Approved";
								}
							
							if($all==2)
							{
								echo "Rejected";
								}
							
							if($all=="3")
							{
								echo "Paid";
								}
							
							if($all=="4")
							{
								echo "Franchise";
								}
							
							
					}
			}
		else
		echo $err;
	
	/*else
	{
		echo "You haven't filled the form yet";
		}*/
?>
