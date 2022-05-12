<?php
$username="root";
$password="";

$database=new PDO("mysql:host=localhost; dbname=aymen;",$username,$password);
if (isset($_POST['login'])) {
    $name=$_POST['name-teacher'];
$email=$_POST['email-teacher'];
    $addData=$database->prepare("INSERT INTO  teatcher(name,email) VALUES('$name','$email')");
  $addData->execute();
  ?>
  <script>alert("add successfully");</script>
<?php
}

if (isset($_POST['delete'])) {
    $email_delete=$_POST['delete-email'];
    $addData1=$database->prepare(" DELETE FROM teatcher WHERE email='$email_delete'");
    $addData1->execute();
  ?>
    <script>alert(" delete successfully");</script>
<?php

}

//$addData=$database->prepare("INSERT INTO  teacher(name,email) VALUES('$name','$email')");
//$addData->execute();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
    <div class="add" >
    <form action="" method="post">
    <div class="add2">
     <h3 class="email">email</h3>
<input type="email" name="email-teacher" id="">
<h3 class="name">name</h3>
<input type="text" name="name-teacher" id="" class="text1" >
<input type="submit" value="add" class="button" name="login">
<h3 class="name4">email</h3>
<input type="text" name="delete-email" id=""  class="text2">
<input type="submit" value="delete" class="button2" name="delete">
        </div></form>
    </div>
</body>
</html>