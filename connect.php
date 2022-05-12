<?php
$username="aymen";
$password="";
$database=new PDO("mysql:host=localhost;dbname=aymen",$username,$password);
$addData=$database->prepare("INSERT INTO apm(ip,email,passwordd) VALUES(1,'aaaaaa','eeee')");
$addData->execute();
?>