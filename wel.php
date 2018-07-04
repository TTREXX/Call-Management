
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
    <title>Portal of calls logging</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="">
    <link rel="icon" href="" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	    <link href="css/style1.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="css/materialize.min.js"></script>
    <script type="text/javascript">
       $(".button-collapse").sideNav();
    </script>
    <style type="text/css">
     .dropdown-content li > a, .dropdown-content li > span {
        color: white;
      }
    </style>
  </head>
  <body>

<!-- 
   <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 -->




<!-- <div class="container"> -->
<div class="col s12 m12">
<div class="row"><span></span></div>
</div>


 <div class="row" style="height: 748px;
    border:none;">

 <nav class="light-blue lighten-1" role="navigation">
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container"  class="brand-logo">GSI</a>
      <ul class="right hide-on-med-and-down">

      <!-- <div class="col s12 m4 l3  blue accent-2 center-align"> --> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel

              This content will be:
          3-columns-wide on large screens,
          4-columns-wide on medium screens,
          12-columns-wide on small screens  -->
		    <li> <div class="row"><a href="demo_iframe.php" target="iframe_a">Home</a></div></li> 
		<li> <div class="row"><a href="newadd.php" target="iframe_a">Add New Query</a></div></li> 
		 <li>  <div class="row"><a href="Search.php" target="iframe_a">Search for Existing Call</a></div></li> 
			 <!--<li><div class="row"><a href="update.php" target="iframe_a">Update Existing Call</a></div></li>--> 
			    <li><div class="row"><a href="delete.php" target="iframe_a">Delete Call</a></div></li> 
				<li><div class="row"><a href="cancel.php" target="iframe_a">Canceled Called</a></div></li> 
					 <li>
                <a class='dropdown-button' href='#' data-activates='dropdown1'>User</a>
                <ul id='dropdown1' class="dropdown-content" style="background-color:#29b6f6;margin-top: 64px;">
                  <li><a href="acc.php" target="iframe_a">Account</a></li> 
                  <li><a href="profile.php" target="iframe_a">Profile</a></li> 
                  <li class="divider"></li>
                  <li><a href="logout.php">Logout</a></li> 
                </ul>
           </li> 
					<!--  <li></li>   <div class="row"><a href="logout.html" target="iframe_a">Logout</a></div></li>  -->
      <!-- </div> -->
 </ul>

   <ul id="nav-mobile" class="side-nav">
          <li> <div class="row"><a href="demo_iframe.php" target="iframe_a">Home</a></div></li> 
           <li><div class="row"><a href="newadd.php" target="iframe_a">Add New Query</a></div></li> 
           <li><div class="row"><a href="Search.php" target="iframe_a">Search for Existing Call</a></div></li> 
           <!--<li><div class="row"><a href="update.php" target="iframe_a">Update Existing Call</a></div></li>--> 
           <li><div class="row"><a href="delete.php" target="iframe_a">Delete Call</a></div></li> 
           <li><div class="row"><a href="cancel.php" target="iframe_a">Canceled Called</a></div></li> 
           <li><div class="row"><a href="profile.php" target="iframe_a"><?php echo $_SESSION['username'];
            ?></a></div></li> 
<li><div class="row"><a href="logout.php">Logout</a></div></li> 
      </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
  </nav>






      <!-- <div class="col s12 m8 l9 teal lighten-4" style="height: 748px""> <!-- Note that "m8 l9" was added --> 
        <!-- Teal page content

              This content will be:
          9-columns-wide on large screens,
          8-columns-wide on medium screens,
          12-columns-wide on small screens  -->
		    <iframe style="height: 700px; width: 100%; border:none;" class="col s12 m8 l9 orange lighten-5" src="demo_iframe.php" name="iframe_a"></iframe>
	

      <!-- </div> -->

    </div>
          
<!-- </div> -->

  </body>
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</html>