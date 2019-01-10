<?php
session_start();
header("Access-Control-Allow-Origin:http://10.30.29.92:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type,xfilecategory,xfilename,xfilesize");
header("content-type:application/json");
$_SESSION['username']=" ";
//$_SESSION['password']=null;
$message=array('message'=>"success");
echo json_encode($message);
session_destroy();
?>