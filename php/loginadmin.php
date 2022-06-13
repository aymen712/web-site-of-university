<?php
$user="aymen";
$password="";
$database3=new  PDO("mysql:host=localhost; dbname=aymen;",$user,$password);
    if ( isset($_POST['login'])) {
        $password=$_POST['password'];
        $email=$_POST['email'];
$req=prepare("SELECT * FROM `adm` WHERE email='$email' && password='$password'");
$req->execute();
/*if ($req->execute()) {
  ?>
    <script>alert(" delete successfully");   </script>
<?php
}*/
$num=mysqli_num_rows($req);
if ($num == 1) {



}};

