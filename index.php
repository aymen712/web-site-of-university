<?php
$user="aymen";
$password="";
$database3=new  PDO("mysql:host=localhost; dbname=aymen;",$user,$password);


//$addData3=$database3->prepare();

 
    if ( isset($login2)) {
        $password=$_POST['password'];
        $login2=$_POST['login2'];
        $email=$_POST['email'];
        
    
        if ($addData3=$database3->prepare("SELECT COUNT(email,passwordd), FROM adm WHERE email='$email'  END passwordd='$password'")){
            $addData3->execute();
            ?>
            <script>alert(" good");</script>
        <?php
        
        }
     
    else {
        ?>
        <script>alert(" bed");</script>
    <?php
    }}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Université Blida 1</title>
    <link rel="stylesheet" href="web.css">
</head>

<body>
    <header>

        <nav>
            <div class="logo">
              
            </div>
            <ol>
                <li><a href="#home">home</a></li>
                <li>
                    <a href="#about" class="home">about</a></li>
                <li><a href="#speciality" class="spécialité">spécialité</a></li>
                <li><a href="#planning"class="planning">planning</a></li>
                <li><a href="#teachers"class="teachers">teachers</a></li>
                <li><a href="#contact"class="contact">contact</a></li>
            </ol>
            <div class="importnt">  <h3>importnt:</h3>
                <p>la date de examen 2022/01/17</p></div>
            <h1 class="department" data-text="Department of">Department of </h1>
            <h1 class="department2" data-text="Informatics...."> Informatics....</h1>
               
            <p class="department-para">Find the right instructor for you from over 10,000 teachers</p>
            <div class="button1le">Learn More</div>
            <div class="button2ad">administrator</div>
        </nav>
        <form action="add.php" method="post">
        <div class="loginadd"><h4 class="loginem">email</h4>
            <input type="email" name="email" id="" placeholder="enter your email">
            <h4 class="loginpass">password</h4>
            <input type="password" name="password" id="" placeholder="enter your password">
            <input type="submit" value="login" name="login2">
           </div></form>
    </header>
<div id="about">
    <div class="about"><h1>about</h1> </div>
<div class="box">
    <span style="--i:1"><img src=".//1.jpg" alt="" srcset=""></span>
    <span style="--i:2"><img src=".//2.jpg" alt="" srcset=""></span>
    <span style="--i:3"><img src=".//3.jpg" alt="" srcset=""></span>
    <span style="--i:4"><img src=".//4.jpg" alt="" srcset=""></span>
    <span style="--i:5"><img src=".//5.jpg" alt="" srcset=""></span>
    <span style="--i:6"><img src=".//6.jpg" alt="" srcset=""></span>
    <span style="--i:7"><img src=".//7.jpg" alt="" srcset=""></span>
    <span style="--i:8"><img src=".//8.jpg" alt="" srcset=""></span>
</div>
<div class="paragraphe"><p>Créé le 20 juin 1977 (décret no 77-92), le Centre Universitaire de Blida a ouvert ses portes aux étudiants quatre ans plus tard, le 8 septembre 1981, où le nombre des étudiants inscrits s’élevait à 526, pour un effectif enseignant de 57 dont 17 étrangers. En août 1989 le C.U.B. s’est transformé en Université suivant le décret exécutif no 89-137 du 1er août 1989.
    Le régime coopératif de l’Université Blida 1 constitue une méthode de formation inestimable pour intégrer graduellement les jeunes universitaires à un marché du travail de plus en plus exigeant.
    Chaque année, près de 5000 stages coopératifs sont effectués dans un millier d’organisations de toutes sortes.
    Par ce fait, l’Université se classe parmi les 10 premiers établissements d’enseignement supérieur en Algérie.....................<a href=".//about.html " target="blank">More</a></p>
    </div></div>
  <!--  <div id="speciality">
 <div class="line1"></div>
 <h1 class="titlespe">speciality</h1>
 <h3 class="license">License</h3>
 <div class="choix1"><img src=".//9.jpg" alt="" srcset=""> <h6>SI</h6></div>
 <div class="choix2"></div>
 <h3 class="master">Master</h3>
 <div class="choix3"></div>
 <div class="choix4"></div>
 <div class="choix5"></div>
 <div class="choix6"></div>
    </div>-->
    <div id="planning">
        <h1 class="titleplan">planning</h1>
        <div class="line2"></div>
     <div class="planningtab1"><a href=".//cour.html" target="blank"><img src=".//pp.jpg" alt="" srcset=""></a><h1>cour</h1></div>
        <div class="planningtab2"><img src=".//ll.jpg" alt=""><h1>examen</h1></div>
    </div>
      <div id="speciality">
 <div class="line1"></div>
 <h1 class="titlespe">speciality</h1>
 <h3 class="license">License</h3>
<a href=".//sik.html" target="blank" style="text-decoration: none;"><div class="choix1"> <h1>si</h1></div></a>
<a href=".//izil.html" target="blank" style="text-decoration: none;"><div class="choix2"><h1>Izil</h1></div></a>
 <h3 class="master">Master</h3>
 <a href=".//sir.html" target="blank" style="text-decoration: none;"> <div class="choix3"><h1>SIR</h1></div></a>
    <a href=".//il.html" target="blank" style="text-decoration: none;"><div class="choix4"><h1>IL</h1></div></a>
 <a href=".//ssi.html" target="blank" style="text-decoration: none;"> <div class="choix5"><h1>SSI</h1></div></a>
 <a href=".//tal.html" target="blank" style="text-decoration: none;"> <div class="choix6"><h1>TAL</h1></div></a>
    </div>
<div id="teachers" >
    <h1 class="titleteacher">Teachers</h1>
    <input type="search"  placeholder="   search" >
    <img src=".//search-svgrepo-com.svg" alt="" srcset="" style="width: 20px;" class="img">
    <div class="postteacher1" ><div class="round"></div><h4>amina amina </h4><img src=".//gmail (2).png" class="emailimg1"></div>
    <div class="postteacher2"><div class="round2"></div><h4>oussama ouss </h4><img src=".//gmail (2).png" class="emailimg2"></div>
    <div class="postteacher3"><div class="round3"></div><h4>akram akram </h4><img src=".//gmail (2).png" class="emailimg3"></div>
    <div class="postteacher4"><div class="round4"></div><h4>eline eline</h4><img src=".//gmail (2).png" class="emailimg4"></div>
    <div class="postteacher5"><div class="round5"></div><h4>amina amina</h4><img src=".//gmail (2).png" class="emailimg5"></div>
</div>

    <script src=".//web.js"></script>
 </html>