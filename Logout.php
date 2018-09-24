<?php
  session_start();
  session_destroy();
  unset($_session['dni']);
  unset($_session['pass']);
  echo("<script>window.location.href = ('./Login.php')</script>");
?>