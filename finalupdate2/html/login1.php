<!DOCTYPE html>
<html lang="en">
<head>
  <title> Doctors 24/7 </title>
    <link rel = "icon" type="image/png" href="images/icon.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/login_signin.css" rel="stylesheet"/>

</head>
<body>
 <?php
 include'header.php'
 ?>



<div class="background_height"><!-- first div ta height thik korar jonno-->
<div class="loginBackground"> <!-- 2nd div ta image add  korar jonno-->
  <div class="container">
      <div class="row">
	         <div class="col-md-4"></div>
			  <div class="col-md-4">
            <form action="login1.php" class="signinContainer" method="post">
	   

             
			  
			  	<?php include('doctor_registration_errors.php');?>
                
				<div class="signIn">Log In</div>
                        <div class="input-group">
            				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            				<input id="signInUserName" type="text" class="form-control" name="signInUserName" placeholder="Enter username">
            			</div>
                  <br>
                       <div class="input-group">
            				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            				<input id="signInPassword" type="password" class="form-control" name="signInPassword" placeholder="Enter password">
            			</div>
              <br>
             
                    <button type="submit" class="btn btn-primary btn-block" name="login_user">Log In</button>
              			<br>
              			<div class="textCen">


                       
						<a href="doctor_registration.php" class="btn btn-info" role="button">Create Account?</a>

                      </div>
                    <div class="col-md-4"></div>
					
					
					  </div>
				  </div>
           
            </form>

		   
  </div>
</div>
</div>
<!--  contact background ends here -->


<?php include 'footer.php' ?>

</body>
</html>
