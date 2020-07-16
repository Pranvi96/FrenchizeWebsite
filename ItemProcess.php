<?php

include_once("result.php");
	
	$query="select distinct items from items";
	//$query="select distinct price from items";
	
	$records=mysqli_query($dbcon,$query);
	
	$err=mysqli_error($dbcon);
	
	$ary=array();
	if($err=="")
		{
			if(mysqli_num_rows($records)>0)
				{
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