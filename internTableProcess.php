<?php

include_once("result1.php");
	
	$query="select  * from intern";
	
	$records=mysqli_query($dbcon,$query);
	
	$err=mysqli_error($dbcon);
	echo ("hello");
	$ary=array();
	if($err=="")
		{
			
			if(mysqli_num_rows($records)>0)
				{echo("hi");
					while($row=mysqli_fetch_array($records))
						{
							$ary[]=$row;			
						}
						echo json_encode($ary);
				}
					
		}
		else
	echo $err;
?>