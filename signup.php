<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">


	<!---<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --->
	<!---<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> --->
	<!---<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="https://kit.fontawesome.com/fa5eca6328.js"></script>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link  src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<!--	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">--->

    <!-- Compiled and minified JavaScript -->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<?php include('includes/navbar.php') ?>
<div class="login-form animated bounceInLeft">
    <form name="form1" action="php/signup_ac.php" method="post">
			<p class="text-center text-primary" style="font-size:50px;">SIGN UP</p>
			<div class="text-center center mb-5">
			<img src="img/user.png" class="img-circle animated delay 2s shake" alt="Cinque Terre" width="100" height="100">
		</div>
        <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Username" required="required">
    </div>

		<div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required">
    </div>

		<div class="form-group">
            <input type="text" id="country" name="country" class="form-control" placeholder="Country" required="required">
    </div>

		<div class="form-group">

            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
    </div>


        <div class="form-group">

            <button type="submit" name="Submit" class="btn btn-primary btn-block">Submit</button>

        </div>

    </form>
</div>
</body>
</html>
