
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>INDEX</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="">
    <link rel="icon" href="" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="css/materialize.min.js"></script>
  </head>
  <body>

<div class="col s12 m6 login_label blue darken-2"><p class="top_heading flow-text">CALL MANAGEMENT SYSTEM (CMS)- Registration</p></div>



 <div class="login_cont col s12 m6">


		<div class="row col s12 m6">



<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
  $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
  $username = mysqli_real_escape_string($con,$username); 
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($con,$email);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)VALUES ('$username', '".md5($password)."', '$email', '$trn_date');INSERT into `user_details`(u_id) values(LAST_INSERT_ID()) ";
        $result = mysqli_multi_query($con,$query) or die(mysql_error());
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<form class=" col s12 m6" name="registration" action="" method="post">
<fieldset>
  <legend class="flow-text">Registration</legend>  
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input class="col s12 m12 login_label1 green darken-2 flow-text btn" type="submit" name="submit" value="Register" />
<p>Please read<a href="tc.html">T&C*</a></p>
</fieldset>
</form>
</div>
<?php } ?>

 <div class="col s12 m6">
    
        <!-- <img class="" width="200" src="Paris.jpg"> -->
        <blockquote>
  <p>If you have already Login ID Please <a href="index.php">Click here</a></p> 
    </blockquote>
    <center  style="background-image: url(https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAbRAAAAJDNiZDc0MjUyLWViNWItNGZjYy05ZGYwLTI2ZmVmOTU2MTBiMQ.jpg); color: white;">
  “You Learn More <br<From Failure Than <br>From Success. <br>Don’t Let It Stop <br>You. Failure Builds <br>Character.”

      </center>
     
      </div>

	

</div>


     





 <div class="row botton_pad">
 <div class="col s6"><div class="col s12 m12 login_label2 blue darken-2"><p class="blue darken-2" style="margin-top: 12px;">Contact: 04,G.S.INFOTECH,<br>
Magathane Depo,Near Trimurti High School <br>
 Borivali(E.) , Mumbai -400066</p><span class="flow-text"><center>

 </center></span></div></div>
 <div class="col s6"><div class="col s12 m12 login_label2 green darken-2"><p class="green darken-2" style="margin-top:12px;">For more information <br>
 Ranjeet Prajapati:+91-8898031325<br>
 Gangasagar Prajapati: +91-8691865601
 
 <p>
<!-- <div class="col s5 pull-s7"><span class="flow-text ">5-columns wide pulled to the left by 7-columns.</span></div> -->
 
 </div>

 </div>
 
 </div>
 

<!-- <div class="col s5 pull-s7 blue darken-2"><span class="flow-text">5-columns wide pulled to the left by 7-columns.</span></div> -->

 <div class="footer-copyright">
 <div style="color:white;
    margin-top: 46px;
    height: 60px;
    text-align: center;padding-top: 19px;" class="col s12 m12 blue darken-2 ">© 2016-2017 G.S.INFOTECH, All rights reserved.</div>

 </div>


  </body>
  <script language="javascript">
   $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
        </script>
</html>