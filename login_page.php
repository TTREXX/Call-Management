
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

<div class="col s12 m6 login_label blue darken-2"><p class="top_heading flow-text">CALL MANAGEMENT SYSTEM (CMS)</p></div>



 <div class="login_cont col s12 m6">

		<div class="row col s12 m6">

		<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
 	$username = stripslashes($_REQUEST['username']);
	$password = stripslashes($_REQUEST['password']);
  $query = "SELECT * FROM users WHERE username='".$username."'and password='".md5($password)."'";
  $result = mysqli_query($con,$query);
  $fetch=mysqli_fetch_assoc($result);
  $rows = mysqli_num_rows($result);
  if($rows==1){
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $fetch['id'];
    $query1 = "SELECT * FROM `user_details` WHERE u_id =".$fetch['id']." ";
    $result1 = mysqli_query($con,$query1);
    $fetch1=mysqli_fetch_assoc($result1);
    if($fetch1['company_name']==''){
        header("Location: detail_update.php");
    }else{
        header("Location: wel.php");      
    }
         }else{
  echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
  } }
?>


<div class="form col s12 m6">
<fieldset>
  <legend class="flow-text">Login</legend>	
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input class="col s12 m12 login_label1 green darken-2 flow-text btn" name="submit" id="submit" type="submit" value="Login" />
	</fieldset>
</form>
<p>Not registered yet? <a href='regis.php'>Register Here</a></p>
</div>

	
	

		


			<div class="col s12 m6">
		
				<!-- <img class="" width="200" src="Paris.jpg"> -->
				<blockquote>
  Motivational And Inspirational Quotes About Success.
    </blockquote>
		<center>
	“You Learn More <br<From Failure Than <br>From Success. <br>Don’t Let It Stop <br>You. Failure Builds <br>Character.”
			</center>
			</div>
	</div>
	
	<!--second  end -->

	
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
 <div>
 


  </body>
  <script language="javascript">
   $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
        </script>
</html>