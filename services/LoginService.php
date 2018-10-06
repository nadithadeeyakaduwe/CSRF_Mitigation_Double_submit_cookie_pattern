<?php
class LoginService {
  public static function login($username, $password) {
    if($username=="sliit" && $password == "123") {
      echo(session_id());
      setcookie("sessionID", session_id());
      $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(28));
      echo("session tiken : " . $_SESSION['token']);
      setcookie("CSRFToken", $_SESSION['token']);
      return true;
    } else {
      return false;
    }
  }
}