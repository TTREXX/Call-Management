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
  </head>
  <body>
    <div class="row" style="    background-color: #0089ec;
    height: 45px;">
    <div class="col s12 m12 flow-text" style="color:white;padding-top: 6px;"> <center>Register Details</center></div>
    </div>
<form method="post">
    <fieldset><legend class="flow-text">Register</legend> 
 	<div class="container">
  		<div class="row">
   			<div class="col s12 m6 center-align">
        		<div class="row">
        			<div class="col s12 m6 center-align">
						Company Name:
        			</div>
        			<div class="col s12 m6 center-align">
    					<input class="" type="text_Ticket_number" name="company_name" value="" >
        			</div>
        		</div> 
   			</div>
   			<div class="col s12 m6 center-align">
	 			<div class="row">
        			<div class="col s12 m6 center-align">
						Contact Name:
        			</div>
        			<div class="col s12 m6 center-align">
        				<input type="text_Ticket_number" name="contact_name" value="" >
        			</div>
    		    </div>
  			</div>
  		</div>



  		<div class="row">
   			<div class="col s12 m6 center-align">
        		<div class="row">
        			<div class="col s12 m6 center-align">
						Address:
        			</div>
        			<div class="col s12 m6 center-align">
    					<input class="" type="text_Ticket_number" name="address" value="" >
        			</div>
        		</div> 
   			</div>
   			<div class="col s12 m6 center-align">
        		<div class="row">
        			<div class="col s12 m6 center-align">
						City:
        			</div>
        			<div class="col s12 m6 center-align">
    					<input class="" type="text_Ticket_number" name="city" value="" >
        			</div>
        		</div> 
   			</div>
  		</div>


  		<div class="row">
   			<div class="col s12 m6 center-align">
	 			<div class="row">
        			<div class="col s12 m6 center-align">
						Zip Code:
        			</div>
        			<div class="col s12 m6 center-align">
        				<input type="text_Ticket_number" name="zip_code" value="" >
        			</div>
    		    </div>
  			</div>
  			<div class="col s12 m6 center-align">
	 			<div class="row">
        			<div class="col s12 m6 center-align">
						State:
        			</div>
        			<div class="col s12 m6 center-align">
        				<input type="text_Ticket_number" name="state" value="" >
        			</div>
    		    </div>
  			</div>		
  		</div>


  		<div class="row">
  			<div class="col s12 m6 center-align">
        		<div class="row">
        			<div class="col s12 m6 center-align">
						Country:
        			</div>
        			<div class="col s12 m6 center-align">
    					<input class="" type="text_Ticket_number" name="country" value="" >
        			</div>
        		</div> 
   			</div>
  			<div class="col s12 m6 center-align">
	 			<div class="row">
        			<div class="col s12 m6 center-align">
						Mobile_no:
        			</div>
        			<div class="col s12 m6 center-align">
        				<input type="text_Ticket_number" name="mobile_no" value="" >
        			</div>
    		    </div>
  			</div>
  		</div>


  		<div class="row">
  			<div class="col s12 m6 center-align">
        		<div class="row">
        			<div class="col s12 m6 center-align">
						Phone Number:
        			</div>
        			<div class="col s12 m6 center-align">
    					<input class="" type="text_Ticket_number" name="phone_no" value="" >
        			</div>
        		</div> 
   			</div>
   			<div class="col s12 m6 center-align">
	 			<div class="row">
        			<div class="col s12 m6 center-align">
						Fax Number:
        			</div>
        			<div class="col s12 m6 center-align">
        				<input type="text_Ticket_number" name="fax_no" value="" >
        			</div>
    		    </div>
  			</div>
  		</div>
  	</div>
  	<center><input type="submit" name="submit" value="Submit" /></center><br>
  	
    </fieldset>
</form>    
<?php 
  		require('db.php');
  		if(isset($_SESSION['user_id'])) {
  			$user_id=$_SESSION['user_id'];
  		}else {
  			header('location:index.php');
  		}
  		if (isset($_REQUEST['submit'])){
        	$company_name = $_REQUEST['company_name'];
  			$contact_name = $_REQUEST['contact_name'];
	  		$country=$_REQUEST['country'];
	  		$address=$_REQUEST['address'];
	  		$state=$_REQUEST['state'];
	  		$city=$_REQUEST['city'];
	  		$zip_code=$_REQUEST['zip_code'];
	  		$mobile_no=$_REQUEST['mobile_no'];
	  		$phone_no=$_REQUEST['phone_no'];
	  		$fax_no=$_REQUEST['fax_no'];
	  		$trn_date = date("Y-m-d H:i:s");
	        $query = "UPDATE user_details set company_name='".$company_name."', contact_name='".$contact_name."', address='".$address."', country='".$country."', state='".$state."', city='".$city."', zipcode='".$zip_code."', mobile_no='".$mobile_no."', phone_no='".$phone_no."', fax_no='".$fax_no."', update_date='".$trn_date."' where u_id=".$user_id." ";
	        $result = mysqli_query($con,$query) or die(mysql_error());
			if($result){
	            echo '<script>window.location.href="wel.php";</script>';
	        }else{
	        	echo '<h2>Some Error Occored!!!</h2>';
	        }
    	}
  	?>
</body>
</html>