<?php
class Token {

  public static function validate($token, $cookieToken) {
    if(strcmp($token, $cookieToken) == 0) {
      return true;
    }
  }
}

