<?php

include_once("result.php");
	
	$query="select * from items";
	
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
		
	//===================================================================================
	
	/*if($_GET["jasus"]=="Save")
		doSave($dbcon);
	else
		echo "bvjh";

	function doSave($dbcon)
	{
	$fid=$_GET["fid"];
	$sitems=$_GET["sitems"];
	$tbill=$_GET["tbill"];
	
	
	
	//echo "$cat $item $price";
	$query="insert into order values('$fid','$sitems','$tbill')";
	
	mysqli_query($dbcon,$query);
	}*/
?>