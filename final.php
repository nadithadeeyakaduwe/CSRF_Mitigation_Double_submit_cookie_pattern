<html>
  <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  </head>
  <body>
	<script>document.write(getCookie('CSRFToken'));</script>
		<?php
		
		require_once 'services/Token.php';
					$csrfTokenValue = $_POST["token"];
					$cookieToken = $_COOKIE['CSRFToken'];
			
					if(isset($_POST['content'])) {
						if(token::validate($csrfTokenValue, $cookieToken)) {
							echo "<div class=\"jumbotron text-center\" style=\" width: 500px; margin: auto; margin-top: 150px\"><h1 class=\"display-4 text-success\">Success!!!</h1><div class=\"alert alert-success lead\" role=\"alert\"><b>Your request is verified and update the status successfully.</b></div></div>";
						}	
						else{
							echo "<div class=\"jumbotron text-center\" style=\" width: 500px; margin: auto; margin-top: 150px\"><h1 class=\"display-4 text-danger\">Denied!!!</h1><div class=\"alert alert-danger lead\" role=\"alert\"><b>Your request is not verified and update the status is not successfully.</b></div></div>";
						}
					} 
				?>

  </body>
</html>