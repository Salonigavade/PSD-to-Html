<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" type="text/css" href="lightbox\lightbox.min.css">

  
<body>
<div>
<header class="img">
<div class="container">
  <div >
    <div>
      <img class="logo" src="images/logo.png">
      <div class="social col-md-2">
           <span>Follow us:</span>
            <a href="#"><img src="images/facebook.png"></a>
            <a href="#"><img src="images/google.png"></a>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-4 col-sm-4 col-xs-4"></div>
    	<div class="col-md-8 col-sm-8 col-xs-8">
		    	<nav class="main-header">
		          <div class="navbar-header">
		           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		              <span class="icon-bar" style="background-color: white;"></span>
		              <span class="icon-bar" style="background-color: white;"></span>
		              <span class="icon-bar" style="background-color: white;"></span>
		            </button>
		            </div>

		            <div class="collapse navbar-collapse" id="myNavbar">
		                 <ul class="nav navbar-nav ccc" style="float: right;">
		                  <li><a class="a1 
		                  	<?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";} ?>" href="index.php">Home</a></li>
		                  <li><a href="newDeals.php" class=" a1 
		                  	<?php if(basename($_SERVER['PHP_SELF'])=="newDeals.php"){echo "active";}  ?>">New Deals</a></li>
		                  <li><a href="currProj.php" class="a1 
		                  	<?php if (basename($_SERVER['PHP_SELF'])=="currProj.php"){echo "active";} ?> ">Current Projects</a></li>
		                  <li><a href="CompletedProj.php" class="a1
		                  <?php if(basename($_SERVER['PHP_SELF'])=="CompletedProj.php"){echo "active";} ?> ">Completed Projects</a></li>
		                  <li><a href="contact.php" class="a1 
		                  	<?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";} ?>">Contact Us</a></li>
		                  <li><a href="about.php" class="a1 
		                  	<?php if(basename($_SERVER['PHP_SELF'])=="about.php"){echo "active";} else?>">About Us</a></li>

		                </ul>
		            </div>
		        </nav>
    	</div>
    </div>
    
  </div>
  </div>
</header>

</div>
</body>
</html>
