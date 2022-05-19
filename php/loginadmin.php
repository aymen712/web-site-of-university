<?php
$database1=mysqli_connect("localhost","aymen","","aymen");
    if ( isset($_POST['login'])) {
        $password=$_POST['password'];
        $email=$_POST['email'];
$req=mysqli_query($database1,"SELECT * FROM `adm` WHERE email='$email' and passwordd='$password'");
$num=mysqli_num_rows($req);echo $num;
if ($num == 1) {
//include('add.php');
$num=0;


 /*   ?>
    
    <script>alert("add successfully");</script>
  <?php*/

}};









/*if ( isset($_POST['login2'])) {
    $password=$_POST['password'];
    $email=$_POST['email'];
  

    $req=$database->prepare("SELECT * FROM adm WHERE email=?");
    $req0=bind_param("email",$email);
    $req1->execute();
   $req_result=$req1->get_result();
   echo $req_result;
echo "dfdfdfdf";
   }; */
   ?>
   