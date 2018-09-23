<?php
  session_start();
  session_destroy();
  unset($_session['dni']);
  unset($_session['pass']);
  echo("<script>alert('usted ha cerrado su sesión');window.location.href = ('./Login.php')</script>");
?>