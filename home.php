<?php
require_once 'services/Token.php';

  session_start();

  // if(isset($_POST['content'], $_POST['token'])) {
  //   $content = $_POST['content'];
  //   $token = $_POST['token'];
    
  //   if(!empty($content) && !empty($token)) {
  //       if (Token::validate($_POST['token'], session_id())) {
  //         header('Location: success.html');
  //       } else {
  //         header('Location: denied.html');
  //       }
  //   }
// }
  
?>
<html>
<head>
  <title>CSRF Protection</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    $(document).ready(function() {
        document.csrf.token.value = getCookie("CSRFToken");
    });
  </script>
</head>

<body>
  <h3>HOME</h3>
  <form name="csrf" method="POST" action="final.php">
  
    <input type="text" name="content" placeholder="Type Name"><br/><br/>
    <input type="hidden" name="token" value=""><br/>
    <input type="submit" value="UPDATE">
  </form>

</body>
</html>
