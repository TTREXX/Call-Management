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
	    <link href="css/style3.css" type="text/css" rel="stylesheet" media="screen,projection">
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
	<div class="col s12 m12 flow-text" style="color:white;padding-top: 6px;"> <center>Search Calls</center></div>
	</div>
	<form method="post">
	<fieldset>
    <legend class="flow-text">Search for Existing Call</legend>	
  		<div class="container">
  			<div class="row">
   				<div class="col s12 m12 center-align">
					Search : <input class="" type="text_Ticket_number" name="search" value="" >
			    </div>
			</div>
			<div class="row center-align">
 				<div class="col s12 m12 center-align">
	 				<table>	
	 					<tr>
	 						<th>Ticket ID</th>
	 						<th>Issue Type</th>
	 						<th>Issue Brief</th>
	 						<th>Regi Date&Time</th>
	 						<th>Attender Name</th>
	 						<th>Attended Date&Time</th>
	 					</tr>
	 					<?php
	 						$srch="";
	 						require('db.php');
	 						if(isset($_POST['search']))
	 						{
	 							$srch=$_REQUEST['search'];
	 						}
	 						$query = "SELECT * FROM `call_logs` WHERE u_id=".$_SESSION['user_id']." and concat(ticket_id,issue_type,issue_brief,date_time) like '%".$srch."%' ";
	        				$result = mysqli_query($con,$query) or die(mysql_error());

	        				if(mysqli_num_rows($result)==0){
		 						echo "<script>alert('No Record Found !!!!');</script>";
		 						$srch="";
		 					}
		 					$query = "SELECT * FROM `call_logs` WHERE u_id=".$_SESSION['user_id']." and concat(ticket_id,issue_type,issue_brief,date_time) like '%".$srch."%' ";
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