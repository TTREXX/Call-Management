<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Search</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="">
    <link rel="icon" href="" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	    <link href="css/style4.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="css/materialize.min.js"></script>
    <style type="text/css">
    	.tr,th,td{
    		border: 1px solid black;
    		padding:5px;
    		text-align: center;
    	}
    </style>
  </head>
  <body>
	<div class="row" style="    background-color: #0089ec;
    height: 45px;">
	<div class="col s12 m12 flow-text" style="color:white;padding-top: 6px;"> <center>Insert New Calls</center></div>
	</div>
	<form method="post">
	<fieldset>
    <legend class="flow-text">Add New Call</legend>	
  		<div class="container">
  			<div class="row">
   				<div class="col s12 m6 center-align">
					<div class="row">
						<div class="col s12 m6 center-align">Issue Type:</div>
						<div class="col s12 m6 center-align">
							<input class="" type="text_Ticket_number" name="issue_type" value="" >
						</div>
					</div>
			    </div>
			</div>
			<div class="row">
   				<div class="col s12 m6 center-align">
					<div class="row">
						<div class="col s12 m6 center-align">Issue in Brief</div>
						<div class="col s12 m6 center-align">
	 						<textarea name="issue_brief" rows="40" cols="40" placeholder="Issue in Description" style="color:black;background-color:white;"></textarea>
						</div>
					</div>
				</div>
 			</div>
			<div class="row">
				<div class="col s12 m6 right-align">
					<button name="submit"><a class="waves-light">Submit</a></button>
					<?php 
						require('db.php');
						$id=$_SESSION['user_id'];
	 					if(isset($_POST['submit']))
	 					{
	 						$issue_brief=$_REQUEST['issue_brief'];
	 						$issue_type=$_REQUEST['issue_type'];
	 						$trn_date = date("Y-m-d H:i:s");
        					$query = "INSERT INTO call_logs(u_id,issue_type,issue_brief,date_time,status)VALUES (".$id.",'".$issue_type."','".$issue_brief."','".$trn_date."','pending');";
        					$result = mysqli_query($con,$query) or die(mysql_error());
					        if($result){
					            echo '<p style="color:green;">Your Complient as been registered our support members will call you with in 24hrs.<p>';
					        }
					        else{
					            echo '<p style="color:red;">Some error occured your complient has not been register.<p>';	
					        }
	 					}
					?>
				</div>
			</div>
 			<div class="row center-align">
 				<div class="col s12 m12 center-align">
	 				<table>	
	 					<tr>
	 						<th>Ticket ID</th>
	 						<th>Issue Type</th>
	 						<th>Issue Brief</th>
	 						<th>Date&Time</th>
	 					</tr>
	 					<?php
	 						
	 						$query = "SELECT * FROM `call_logs` WHERE u_id=".$id."";
        					$result = mysqli_query($con,$query) or die(mysql_error());
	 						while ($row=mysqli_fetch_assoc($result)) {
	 							echo '
	 								<tr>
	 									<td>'.$row["ticket_id"].'</td>
	 									<td>'.$row["issue_type"].'</td>
	 									<td>'.$row["issue_brief"].'</td>
	 									<td>'.$row["date_time"].'</td>
	 								</tr>
	 							';
	 						}
	 					?>
	 				</table>
 				</div>
 			</div>
 		</div>
  	</fieldset>
  	</form>
</body>
</html>