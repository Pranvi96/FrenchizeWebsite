<?php

include_once("result.php");
	
	
	
	$query="select  * from app where status='3'";
	
	$records=mysqli_query($dbcon,$query);
	//$query="insert into franchise(uid,pwd,name,mobile,location,city,state,email)
	//select mobile,mobile,name,location,city,state,email";
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
				else
				{
					$ary[]=array("msg"=>"error");
	//echo json_encode($ary);
				}
					
		}
	else
	{
		$ary[]=array("msg"=>"error");
	//echo json_encode($ary);
	}
	

?>