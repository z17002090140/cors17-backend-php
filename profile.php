<?php
header("Access-Control-Allow-Origin:http://10.30.29.92:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:Content-Type');
$userName=array("userName"=>'123456');
echo json_encode($userName);
?>