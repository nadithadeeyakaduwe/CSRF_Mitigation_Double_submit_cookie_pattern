<html>
  <head>

  </head>
  <body>
		<?php
		require_once 'services/Token.php';
		print_r($_COOKIE);
					$csrfTokenValue = $_POST["token"];
					echo("<br>cookie : " . $_COOKIE["CSRFToken"] . "<br> by methos : " . $csrfTokenValue . "<br>");
					if(isset($_POST['content'])){
						if(token::validate($csrfTokenValue, $_COOKIE['CSRFToken'])){
							echo "<div><h3>Updated Successfully</h3></div>";
							echo $_POST['content'];		
						}	
						else{
							echo "Error In Updating Status";
						}
					} 
				?>

  </body>
</html>