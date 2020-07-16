<?php
include_once("SMS_OK_sms.php");
$mob=$_GET["mobile"];
$msg=$_GET["msg"];

$resp= SendSMS($mob,$msg);
//if($resp=="sent")
echo $resp;
//else
//echo "SMS Failed..";


?>