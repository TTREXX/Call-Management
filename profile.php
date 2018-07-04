<?php
	//include auth.php file on all secure pages
	include("auth.php");
	require('db.php');
	$id=$_SESSION['user_id'];
	$query = "SELECT * FROM user_details WHERE u_id=".$id." ;";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$row=mysqli_fetch_assoc($result);
	$lb="lbl";
	$ro="readonly";
	$btn="0";
	if(isset($_POST['edit'])){
		$lb="";
		$ro="";
		$btn="1";
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
	<form method="post">
	<div class="container">
		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						User Name : <input type="newt_textbox" class="lbl" value="<?php echo $row['contact_name']; ?>" readonly/>
					</div>
				</div>
   			</div>
   			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Company Name : <input type="newt_textbox" class="lbl" value="<?php echo $row['company_name']; ?>" readonly/>
					</div>
				</div>
   			</div>
 		</div>

 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Address :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['address'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
   			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						City :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['city'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
 		</div>
 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						State :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['state'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
   			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Country :  <?php echo'<input type="newt_textbox" class="'.$lb.'"  value="'.$row['country'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
 		</div>

 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Zip Code :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['zipcode'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
   			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Mobile No. :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['mobile_no'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
 		</div>
 		<div class="row">
  			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Phone No. :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['state'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
   			<div class="col s12 m6 center-align">
				<div class="row">
					<div class="col s12 m12 center-align">
						Fax No. :  <?php echo'<input type="newt_textbox" class="'.$lb.'" value="'.$row['fax_no'].'" '.$ro.'  />'; ?>
					</div>
				</div>
   			</div>
 		</div>
 		
 		<div class="row">
 			<div class="col s12 m12 center-align">
 				<?php
 					if($btn=="0"){
 						echo '<button type="submit" name="edit">Edit</button>';
 					}else{
 						echo '<button type="submit" name="update">Update</button>&nbsp;&nbsp;&nbsp;';
 						echo '<button type="submit" name="cancel">Cancel</button>';
 					}	
 				?>
 			</div>
 		</div>
 	</div>
  	</form>
  </body>
</html>