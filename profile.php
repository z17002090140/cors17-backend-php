<?php
header("Access-Control-Allow-Origin:http://localhost:63342");
header("Access-Control-Allow-Credentials:true");
$userName=array("userName"=>'123456');
echo json_encode($userName);
?>