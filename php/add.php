<?php
$username="root";
$password="";
$database=new PDO("mysql:host=localhost; dbname=aymen;",$username,$password);

if (isset($_GET['login1'])) {$name1=$_GET['name1'];
$email=$_GET['email1'];
$addData=$database->prepare("INSERT INTO  teacher (name,email) VALUES('$name1','$email')");
  $addData->execute();
 
 
}

if (isset($_GET['delete'])) {
    
    $email_delete=$_GET['email'];
    $addData1=$database->prepare(" DELETE FROM teacher WHERE email='$email_delete'");
    $addData1->execute();
  ?>
    <script>alert(" delete successfully");   </script>
<?php

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<style>
  .add {
    background: linear-gradient(rgba(5, 5, 5, 0.473), rgba(0, 0, 0, 0.507)), url(.//45.jpg) no-repeat;
    object-fit: cover;
    width: 100%;
    height: 100vh;
}

* {
    padding: 0;
    margin: 0;
}

.add2 {
    transform: translate(80%, 70%);
    width: 500px;
    height: 300px;
    border: solid 2px white;
    background: white;
    border-radius: 10px;
}

input[type="email"] {
    width: 200px;
    border-radius: 10px;
    height: 30px;
    position: relative;
    top: 1em;
    left: 15em;
    border: solid 2px black;
}

.text1 {
    width: 200px;
    border-radius: 10px;
    height: 30px;
    left: 1em;
    top: -2.5em;
    position: relative;
    bottom: 2em;
    border: solid 2px black;
}

.text2 {
    width: 200px;
    border-radius: 10px;
    height: 30px;
    left: 1em;
    position: relative;
    top: 1em;
    border: solid 2px black;
}

.name4 {
    position: relative;
    height: 30px;
    left: 1em;
}

.email {
    position: relative;
    bottom: -.5em;
    left: 11.5em;
}

.name {
    width: 100px;
    position: relative;
    top: -2em;
    left: 1em;
}

.button {
    position: relative;
    left: -1em;
    top: 0em;
    width: 100px;
    cursor: pointer;
}

.button2 {
    position: relative;
    top: 1em;
    cursor: pointer;
    width: 100px;
    left: 2em;
}
</style>
<body>
    <div class="add" >
    <form action="" method="GET">
    <div class="add2">
     <h3 class="email">email</h3>
<input type="email" name="email1" id="">
<h3 class="name">name</h3>
<input type="text" name="name1" class="text1" >
<input type="submit" value="add" class="button" name="login1">
<h3 class="name4">email</h3>
<input type="text" name="email"   class="text2">
<input type="submit" value="delete" class="button2" name="delete">
        </div></form>
    </div>
</body>
</html>