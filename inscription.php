<?php
include "./BDD.php";


function traiter_input($donnee){
  $donnee = stripcslashes($donnee); 
  $donnee = htmlspecialchars($donnee); 
  return $donnee;
}
$Name="";
$email="";
$Message="";
$err=[];

if (isset($_POST['Contact'])){

  $Name=traiter_input($_POST['Full_Name']);
  $email=traiter_input($_POST['email']);
  $Message=traiter_input($_POST['Message']);
  
     if (empty($Name)){
      $err['Full_Name']="Please enter your name !!!";
  }elseif (!preg_match("/^[a-zA-Z ]+$/", $Name)) {        
      $err['Full_Name']="Only alphabetical characters are allowed !!!";
  }elseif (strlen($Name)>99) {
      $err['Full_Name']="The name must not exceed 99 characters !!";
  }

  if (empty($email)){
    $err['email']="Please enter your Email!!!";
    }
    elseif (!preg_match("/^[a-zA-Z\-_\.0-9]+@[a-zA-Z\-_\.0-9]+\.[a-zA-Z]+$/", $email)) {        
    $err['email']="Email invalid !!!";
    }elseif (strlen($email)>99) {        
    $err['email']="Email too long !!!";
    }

    if (empty($Message)){
      $err['Message']="Please enter information about your project!!!";
  }

  // echo $Name;
  // echo $email;
  // echo $Message;

  if (count($err)==0){
    $sql=" INSERT INTO new_client(Full_Name, Email,Mgs)"." VALUES ('$Name','$email','$Message')";
    InsertIntodata($sql);
   echo '<script>alert(" Votre demande a été effectuée Mr/Miss '.$Name.'") </script>';
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </head>
  <body>
 
  <header>
    <div class="logo"><span>Sa</span>Am</div>
    <nav>
      <ul>
        <li><a href="index.html" class="active"><i class="fa fa-home"></i>&nbsp;<span>Home</span></a></li>
        <li><a href="inscription.php"><i class="fa fa-user"></i>&nbsp;<span>Register</span></a></li>
        <li><a href="categories.html"><i class="fa fa-address-card"></i>&nbsp;<span>Categories</span></a></li>
        <li><a href="aboutme.html"><i class="fa fa-info"></i>&nbsp;<span>About me</span></a></li>
      </ul>
    </nav>
    <div class="toggle-menu"><i class="fas fa-bars"></i></div>
  </header>
    <br><br><br><br><br>
    <div class="signup-form">
      
    <form  method="POST">
        <h1>Contact Me</h1>
        <input type="text" id="Full_Name" name="Full_Name" placeholder="Full Name" class="txtb" require>
        <span style="color:white;"><?php if (isset($err['Full_Name'])) echo $err['Full_Name']; ?></span>
        <input type="email" id="email" name="email" placeholder="Email" class="txtb" require>
        <span style="color:white;"><?php if (isset($err['email'])) echo $err['email']; ?></span>

        <input type="text" id="Message" name="Message" placeholder="about your project" class="txtb msg" require>
        <span style="color:white;"><?php if (isset($err['Message'])) echo $err['Message']; ?></span>

        <input type="submit"   name="Contact"value="Contact" class="signup-btn">
      </form>
      </div>


<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>



      
      <div class="footer">
            <div class="inner-footer">
        
                <div class="footer-item">
                    <h1>Sail Amani</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum beatae omnis quos natus quod quam animi tempora voluptatem</p>
        
                </div>
                <div class="footer-item">
                  <h3 style="color: white; text-transform: uppercase;">Quick Link</h3><br>
                  <div class="ligne"></div>
                       <ul>
                        <li><a href="">About Me</a></li>
                        <li><a href="">potfolio</a></li>
                        <li><a href="">contact me</a></li>
        
                       </ul>
                 </div>
                 <div class="footer-item">
                     <h3 style="color: white; text-transform: uppercase;">about</h3>
                     <br>
                     <div class="ligne"></div>
                        <ul>
                           <li><a href="">About Me</a></li>
                           <li><a href="">potfolio</a></li>
                           <li><a href="">contact me</a></li>
                       </ul>
                 </div>
        
                 <div class="footer-item">
                  <h3 style="color: white; text-transform: uppercase;">Contact us</h3>
                  <br>
                  <div class="ligne"></div>
                       <ul>
                           <li><i class="fa fa-map-marker-alt"></i> Fesdis .</li>
                           <li><i class="fa fa-phone-alt"></i>+231*********</li>
                           <li><i class="fa fa-envelope"></i> amani@pro.com</li>
                       </ul>
                       
                 </div>
                 <div class="social-media">
                  <a href=""><i class="fa fa-facebook-f"></i></a>
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-instagram"></i></a>
        
              </div>
        
           </div>
           <div class="footer-button">
              copyright &copy; :2020
           </div>
        
        </div>
    


    <script>




  </body>
</html>