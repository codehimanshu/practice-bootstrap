<?php
	session_start();
	require_once 'db_connect.php';

	//checking authorised accesss
	if(!isset($_SESSION["user"]))
		header("Location: ajax.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="keywords" content="">
	    <meta name="author" content="">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>IncubateX</title>

	    <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	    <!-- jQuery (Must for Bootstrap) -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>
  	<body>

  	<div class="container-fluid">
  		<div class=row>
  			<div class="col-xs-4" style="background:#6699ff; height:500px;">
  				USERS
  				<div class="user"></div>
  			</div>
  			<div class="col-xs-8" style="background:#33cc33; height:500px;">
  				MEASSAGES
  				<div class="message"></div>
  			</div>
		  	<button>Click me to load messages</button>
		  	<div class=msg></div>
	  	</div>
  	</div>

	   	<!-- Bootstrap script -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="js/ajax.js"></script>
  	</body>
</html>