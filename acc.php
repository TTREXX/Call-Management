<?php
	//include auth.php file on all secure pages
	include("auth.php");
	require('db.php');
	$id=$_SESSION['user_id'];
	$query = "SELECT * FROM users WHERE id=".$id." ;";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row=mysqli_fetch_assoc($result);
	$lb="lbl";
	$ro="readonly";
	$btn="0";
	$err="0";
	if(isset($_POST['edit'])){
		$lb="";
		$ro="";
		$btn="1";
	}
	if(isset($_POST['sub'])){
		$opass=$_REQUEST['opass'];
		$npass=$_REQUEST['npass'];
		$cpass=$_REQUEST['cpass'];
		if($row['password']==md5($opass)){
			if($cpass==$npass){
				$query = "update users set password='".md5($npass)."' WHERE id=".$id." ;";
				$result = mysqli_query($con,$query) or die(mysql_error());
				if($result){
					echo '<script>alert("Password Changed..");</script>';
				}
			}else{
				$err="2";
				$btn="1";
			}	 							
		}else{
			$err="1";
			$btn="1";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Profile</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="">
    <link rel="icon" href="" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	    <link href="css/style5.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="css/materialize.min.js"></script>
    <style type="text/css">
    	.lbl{
    		border:none;
    		background-color: transparent;
    	}
    </style>
  </head>
  <body>
	<div class="row" style="    background-color: #0089ec;
    height: 45px;">
	<div class="col s12 m12 flow-text" style="color:white;padding-top: 6px;"> <center>Profile Details</center></div>
	</div>
	
	<div class="container">
		<div class="row">
  			<div class="col s12 m6 left-align">
				<div class="row">
					<div class="col s12 m12 left-align">
						Email ID :  <?php echo'<input type="newt_textbox" class="lbl" value="'.$row['email'].'" readonly/>'; ?>
					</div>
				</div>
   			</div>
 		</div>

 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 left-align">
						User Name:  <?php echo'<input type="newt_textbox" class="lbl" value="'.$row['username'].'" readonly />'; ?>
					</div>
				</div>
   			</div>
 		</div>
 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 left-align">
						<?php
		 					if($btn=="0"){
		 						echo '<form method="post">';
		 						echo 'Password : ******** &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		 						echo '<button type="submit" name="edit">Change Password</button>';
		 						echo '</form>';
		 					}
		 					else{
		 				?>
		 						<form method="post">
		 						<fieldset>
    							<legend class="flow-text">Change Password</legend>	
		 							Old Password : <input type="newt_textbox" name="opass" /> <br><br>
		 							New Password : <input type="newt_textbox" name="npass" /> <br><br>
		 							Conf. Password : <input type="newt_textbox" name="cpass" /> <br><br>
		 							<button type="submit" name="sub">Submit</button>&nbsp;&nbsp;
		 							<button type="submit" name="cancel">Cancel</button>
		 							<?php
		 								if($err=="1"){
		 									echo '<p name="id" style="color:red">Old password did not match.</p>';
		 								}else if($err=="2"){
		 									echo '<p name="id" style="color:red">New Password did not match with Conf. Password</p>';
		 								}

		 							?>
		 							
		 						
		 						</fieldset>
		 						</form>
		 				<?php	
		 					}
		 				?>
					</div>
				</div>
   			</div>
 		</div>
 	</div>
  </body>
</html>