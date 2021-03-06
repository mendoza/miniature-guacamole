<?php session_start();
if (isset($_SESSION['dni']) && isset($_SESSION['pass'])):
?>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
<link rel="shortcut icon" type="image/png" href="Favicon.png">
<div class="topnav">
  <img src="Logo.png" />
  <div class="header-right">
    <a class="<?php if($page=='Inicio'){echo active;}?>" href="./Inicio.php">Inicio</a>
    <a class="<?php if($page=='RealizarPrueba'){echo active;}?>" href="./RealizarPrueba.php">Realizar Prueba</a>
    <div class="dropdown">
      <button class="dropbtn">Mostrar
      </button>
      <div class="dropdown-content">
        <a class="<?php if($page=='MostrarModelo') {echo active;}?>" href="./MostrarModelo.php">Modelos Existentes</a>
        <a class="<?php if($page=='MostrarAvion') {echo active;}?>" href="./MostrarAvion.php">Aviones Estacionados</a>
        <a class="<?php if($page=='MostrarPrueba') {echo active;}?>" href="./MostrarPrueba.php">Condición de Aviones</a>
      </div>
    </div>
    <?php if($_SESSION['dni']=='2459720448435'):?>
      <div class="dropdown">
        <button class="dropbtn">Registrar
        </button>
        <div class="dropdown-content">
          <a class="<?php if($page=='RegistrarTecnico'){echo active;}?>" href="./RegistrarTecnico.php">Técnico</a>
          <a class="<?php if($page=='RegistrarConaero') {echo active;}?>" href="./RegistrarConaero.php">Controlador Aéreo</a>
          <a class="<?php if($page=='RegistrarModelo') {echo active;}?>" href="./RegistrarModelo.php">Modelo</a>
          <a class="<?php if($page=='RegistrarAvion') {echo active;}?>" href="./RegistrarAvion.php">Avión</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Modificar
        </button>
        <div class="dropdown-content">
          <a class="<?php if($page=='ModificarPerfil') {echo active;}?>" href="./ModificarPerfil.php">Editar Mi Perfil</a>
          <a class="<?php if($page=='ModificarConaero') {echo active;}?>" href="./ModificarConaero.php">Controladores Aéreos</a>
          <a class="<?php if($page=='ModificarModelo') {echo active;}?>" href="./ModificarModelo.php">Modelos</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Eliminar
        </button>
        <div class="dropdown-content">
          <a class="<?php if($page=='EliminarEmpleado'){echo active;}?>" href="./EliminarEmpleado.php">Empleado</a>
          <a class="<?php if($page=='EliminarModelo') {echo active;}?>" href="./EliminarModelo.php">Modelo</a>
          <a class="<?php if($page=='EliminarAvion') {echo active;}?>" href="./EliminarAvion.php">Avión</a>
        </div>
      </div>
    <?php endif?>
    <?php if($_SESSION['dni']!='2459720448435'):?>
      <a class="<?php if($page=='ModificarPerfil') {echo active;}?>" href="./ModificarPerfil.php">Editar Mi Perfil</a>
    <?php endif?>
    <a  href="./Logout.php">Logout</a>             
  </div>
</div>
<?php else:?>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
<link rel="shortcut icon" type="image/png" href="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDYxMi4wMDIgNjEyLjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjEyLjAwMiA2MTIuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTU3MS43NzEsMTIzLjU1NWMyNS4xMjEtMzMuNjI2LDQwLjE1Ny02OC41MzgsNDAuMjMtOTMuNDhjLTAuMDMxLTguMDc3LTEuNjUxLTE0LjM4OS00LjczMy0xOS4wOTEgICBjLTAuMzI0LTAuNTc1LTEuMjEyLTIuMDgtMi43NzktMy41NjNjLTEuNTU4LTEuNTQ2LTIuOTU4LTIuMzcyLTMuMjYxLTIuNTM5Yy00LjkzMi0zLjI5Mi0xMS4yNzQtNC44OC0xOS4zNTMtNC44OCAgIGMtMjQuODgsMC4wNDItNTkuODAyLDE1LjA2OC05My40MzgsNDAuMjNjLTI3LjE4OCwyMC4zNDUtNTQuMzc4LDQ4Ljk5Ny05Mi4wMTcsODguNjczYy02LjM4NSw2LjcyOS0xMy4xMDQsMTMuODA0LTIwLjIxLDIxLjIyMyAgIGwtNzIuOTA1LTIxLjg1bDAuMjE5LTAuMjA5YzMuMDMtMy4wNjIsNC43NTUtNy4yNzMsNC43MTMtMTEuNDExYzAuMDQyLTQuMzY4LTEuNzI0LTguNTc5LTQuNzY1LTExLjYwOWwtMTMuMTY2LTEzLjE4NyAgIGMtMy4wNDEtMy4wNjItNy4yNDItNC44MTctMTEuNTg4LTQuODE3Yy00LjM4OSwwLTguNDg1LDEuNjkzLTExLjU0Nyw0Ljc4NmwtMTkuNjk3LDE5LjcwOGwtMTAuNDI5LTMuMTE0ICAgYzIuMjQ3LTIuODUzLDMuNDktNi40MTYsMy40NDgtOS45MjdjMC4wNDItNC40MzEtMS42NzItOC41NTgtNC43NTQtMTEuNjJsLTEzLjIyOS0xMy4yMjljLTMuMDItMy4wMy03LjItNC43NjUtMTEuNTg4LTQuNzY1ICAgYy00LjM2OCwwLTguNDU0LDEuNzA0LTExLjQ4NCw0Ljc4NmwtMTguMDc3LDE4LjA2N2wtNzQuMTI4LTIyLjIwNWMtMS42NjEtMC40OTEtMy40MTctMC43NTItNS4yOTgtMC43NTIgICBjLTUuMjY2LDAuMDYzLTEwLjE0NiwyLjAxNy0xMy43MDksNS41NDlsLTI2LjA2MSwyNi4wNzFjLTIuOTU4LDIuOTU3LTQuNjE5LDYuOTU5LTQuNTg3LDEwLjc1MiAgIGMtMC4wOTQsNS41OSwyLjk5OSwxMC43NTIsNy45NTIsMTMuNDA2bDE1NS44ODQsODcuMDg1YzAuNzYzLDAuNDI4LDIuOTY4LDIuMDU5LDMuNzgzLDIuODc0bDQ0LjQ0MSw0NC40MzEgICBjLTQxLjU2OCw0My43OTMtNzguNjAxLDg2LjIwOC0xMDcuNDYxLDEyMy4xMDRjLTIuNjk2LDMuNDI4LTUuMjQ2LDYuNzcxLTcuNzU0LDEwLjA4NEwzMy44MjcsMzgxLjE4NSAgIGMtMC41ODUtMC4wNzMtMS4yNDQtMC4xMjYtMi4wOC0wLjEyNmMtNS41MjgsMC4xMTUtMTAuOTMsMi4zLTE0Ljk0Miw2LjE3Nkw0LjY1MiwzOTkuMzc3Yy0yLjk5OSwyLjkzNy00LjY5Miw2LjkwNy00LjY1LDEwLjc0MiAgIGMtMC4wOTQsNS44NTIsMy40NDgsMTEuMjY0LDguNzY3LDEzLjYzNmw4NC44MzgsNDAuMjkzYzAuNzMxLDAuMzY2LDIuNjMzLDEuNzE0LDMuMjUsMi4zM2w3LjA0Myw2Ljk5MSAgIGMtMi4yMDUsNi4yMDctMy4zMjMsMTEuNTg4LTMuMzg2LDE2LjMxMmMtMC4wMjEsNi4zMjEsMi4wMTcsMTEuNzM0LDUuOTE1LDE1LjYzMmwwLjMwMywwLjI2MmwwLjA4MywwLjA2MiAgIGM0LjAwMiwzLjg3Nyw5LjE4NSw1Ljg1MiwxNS42MDEsNS44NTJjNC42MTktMC4wNzMsOS45NDgtMS4xNywxNi4xNzYtMy4zNjRsNy4xNDcsNy4xMzdjMC41NTQsMC41ODUsMS44ODEsMi40NDUsMi4yMjYsMy4xODcgICBsNDAuMjA5LDg0LjY1MWMyLjQ1Niw1LjQwMiw3Ljc1Myw4LjkwMiwxMy41MjEsOC45MDJoMC4wODNjMy45OTIsMCw3LjgwNi0xLjU5OSwxMC43MjEtNC41MjRsMTIuNDQ1LTEyLjQ4NyAgIGMzLjY4OC0zLjg4Nyw1Ljg2Mi05LjI0Nyw1Ljk0NS0xNC45YzAtMC42ODktMC4wMzEtMS4yMjMtMC4wNTItMS41MTZsLTEwLjk4Mi0xMjEuMDM1YzMuMzAyLTIuNDg3LDYuNjQ2LTUuMDQ3LDEwLjA4My03LjcyMiAgIGMzNi45NDktMjguOTAzLDc5LjM3NC02NS45NjgsMTIzLjA4My0xMDcuNDczbDQ0LjQ3Myw0NC41MTVjMC43MjEsMC42ODksMi40MDMsMi44OTUsMi44OTUsMy44MTRsODYuOTE4LDE1NS42MDIgICBjMi42NTQsNS4wMjYsNy43NjQsOC4xMywxMy40MjgsOC4xM2M0LjA0NCwwLDcuODg5LTEuNTk5LDEwLjgzNi00LjU2NmwyNi4yNDgtMjYuMjI5YzMuNDA3LTMuNTYyLDUuMzE5LTguNDAxLDUuMzcxLTEzLjY4OCAgIGMwLTEuNzc2LTAuMjUtMy41LTAuNzEtNS4xMmwtMjIuMjA1LTc0LjE0OWwxOC4wNjYtMTguMDk4YzMuMDQxLTMuMDIxLDQuNzY2LTcuMjIxLDQuNzY2LTExLjUzNmMwLTQuMzM3LTEuNjgzLTguNDEyLTQuNzQ0LTExLjUxNiAgIGwtMTMuMjUtMTMuMjM5Yy0zLjAzLTMuMDQxLTcuMjIxLTQuNzc1LTExLjUzNi00Ljc3NWMtMy42NTcsMC03LjIzLDEuMjIzLTEwLjAyMSwzLjQyOGwtMy4xMDQtMTAuMzg3bDE5LjcxOC0xOS43MTggICBjMy4wMy0zLjA0MSw0Ljc1NS03LjI0Miw0Ljc1NS0xMS41NjhjMC00LjM1Ny0xLjY4My04LjQ0Mi00Ljc1NS0xMS41MDRsLTEzLjE4OC0xMy4xODhjLTMuMDQxLTMuMDgzLTcuMjYyLTQuODI4LTExLjU5OS00LjgyOCAgIGMtNC4zNTcsMC04LjU3OSwxLjc2Ni0xMS41NTcsNC44MDdsLTAuMTM2LDAuMTI1bC0yMS44NC03Mi44OTVjNy41NDUtNy4xODksMTQuNzAyLTE0LjAzNCwyMS41NDctMjAuNDgxICAgQzUyMi45MzIsMTc3Ljc2Niw1NTEuNDc5LDE1MC42ODEsNTcxLjc3MSwxMjMuNTU1eiIgZmlsbD0iIzAwMDAwMCIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">
<div class="topnav">
  <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDYxMi4wMDIgNjEyLjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjEyLjAwMiA2MTIuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTU3MS43NzEsMTIzLjU1NWMyNS4xMjEtMzMuNjI2LDQwLjE1Ny02OC41MzgsNDAuMjMtOTMuNDhjLTAuMDMxLTguMDc3LTEuNjUxLTE0LjM4OS00LjczMy0xOS4wOTEgICBjLTAuMzI0LTAuNTc1LTEuMjEyLTIuMDgtMi43NzktMy41NjNjLTEuNTU4LTEuNTQ2LTIuOTU4LTIuMzcyLTMuMjYxLTIuNTM5Yy00LjkzMi0zLjI5Mi0xMS4yNzQtNC44OC0xOS4zNTMtNC44OCAgIGMtMjQuODgsMC4wNDItNTkuODAyLDE1LjA2OC05My40MzgsNDAuMjNjLTI3LjE4OCwyMC4zNDUtNTQuMzc4LDQ4Ljk5Ny05Mi4wMTcsODguNjczYy02LjM4NSw2LjcyOS0xMy4xMDQsMTMuODA0LTIwLjIxLDIxLjIyMyAgIGwtNzIuOTA1LTIxLjg1bDAuMjE5LTAuMjA5YzMuMDMtMy4wNjIsNC43NTUtNy4yNzMsNC43MTMtMTEuNDExYzAuMDQyLTQuMzY4LTEuNzI0LTguNTc5LTQuNzY1LTExLjYwOWwtMTMuMTY2LTEzLjE4NyAgIGMtMy4wNDEtMy4wNjItNy4yNDItNC44MTctMTEuNTg4LTQuODE3Yy00LjM4OSwwLTguNDg1LDEuNjkzLTExLjU0Nyw0Ljc4NmwtMTkuNjk3LDE5LjcwOGwtMTAuNDI5LTMuMTE0ICAgYzIuMjQ3LTIuODUzLDMuNDktNi40MTYsMy40NDgtOS45MjdjMC4wNDItNC40MzEtMS42NzItOC41NTgtNC43NTQtMTEuNjJsLTEzLjIyOS0xMy4yMjljLTMuMDItMy4wMy03LjItNC43NjUtMTEuNTg4LTQuNzY1ICAgYy00LjM2OCwwLTguNDU0LDEuNzA0LTExLjQ4NCw0Ljc4NmwtMTguMDc3LDE4LjA2N2wtNzQuMTI4LTIyLjIwNWMtMS42NjEtMC40OTEtMy40MTctMC43NTItNS4yOTgtMC43NTIgICBjLTUuMjY2LDAuMDYzLTEwLjE0NiwyLjAxNy0xMy43MDksNS41NDlsLTI2LjA2MSwyNi4wNzFjLTIuOTU4LDIuOTU3LTQuNjE5LDYuOTU5LTQuNTg3LDEwLjc1MiAgIGMtMC4wOTQsNS41OSwyLjk5OSwxMC43NTIsNy45NTIsMTMuNDA2bDE1NS44ODQsODcuMDg1YzAuNzYzLDAuNDI4LDIuOTY4LDIuMDU5LDMuNzgzLDIuODc0bDQ0LjQ0MSw0NC40MzEgICBjLTQxLjU2OCw0My43OTMtNzguNjAxLDg2LjIwOC0xMDcuNDYxLDEyMy4xMDRjLTIuNjk2LDMuNDI4LTUuMjQ2LDYuNzcxLTcuNzU0LDEwLjA4NEwzMy44MjcsMzgxLjE4NSAgIGMtMC41ODUtMC4wNzMtMS4yNDQtMC4xMjYtMi4wOC0wLjEyNmMtNS41MjgsMC4xMTUtMTAuOTMsMi4zLTE0Ljk0Miw2LjE3Nkw0LjY1MiwzOTkuMzc3Yy0yLjk5OSwyLjkzNy00LjY5Miw2LjkwNy00LjY1LDEwLjc0MiAgIGMtMC4wOTQsNS44NTIsMy40NDgsMTEuMjY0LDguNzY3LDEzLjYzNmw4NC44MzgsNDAuMjkzYzAuNzMxLDAuMzY2LDIuNjMzLDEuNzE0LDMuMjUsMi4zM2w3LjA0Myw2Ljk5MSAgIGMtMi4yMDUsNi4yMDctMy4zMjMsMTEuNTg4LTMuMzg2LDE2LjMxMmMtMC4wMjEsNi4zMjEsMi4wMTcsMTEuNzM0LDUuOTE1LDE1LjYzMmwwLjMwMywwLjI2MmwwLjA4MywwLjA2MiAgIGM0LjAwMiwzLjg3Nyw5LjE4NSw1Ljg1MiwxNS42MDEsNS44NTJjNC42MTktMC4wNzMsOS45NDgtMS4xNywxNi4xNzYtMy4zNjRsNy4xNDcsNy4xMzdjMC41NTQsMC41ODUsMS44ODEsMi40NDUsMi4yMjYsMy4xODcgICBsNDAuMjA5LDg0LjY1MWMyLjQ1Niw1LjQwMiw3Ljc1Myw4LjkwMiwxMy41MjEsOC45MDJoMC4wODNjMy45OTIsMCw3LjgwNi0xLjU5OSwxMC43MjEtNC41MjRsMTIuNDQ1LTEyLjQ4NyAgIGMzLjY4OC0zLjg4Nyw1Ljg2Mi05LjI0Nyw1Ljk0NS0xNC45YzAtMC42ODktMC4wMzEtMS4yMjMtMC4wNTItMS41MTZsLTEwLjk4Mi0xMjEuMDM1YzMuMzAyLTIuNDg3LDYuNjQ2LTUuMDQ3LDEwLjA4My03LjcyMiAgIGMzNi45NDktMjguOTAzLDc5LjM3NC02NS45NjgsMTIzLjA4My0xMDcuNDczbDQ0LjQ3Myw0NC41MTVjMC43MjEsMC42ODksMi40MDMsMi44OTUsMi44OTUsMy44MTRsODYuOTE4LDE1NS42MDIgICBjMi42NTQsNS4wMjYsNy43NjQsOC4xMywxMy40MjgsOC4xM2M0LjA0NCwwLDcuODg5LTEuNTk5LDEwLjgzNi00LjU2NmwyNi4yNDgtMjYuMjI5YzMuNDA3LTMuNTYyLDUuMzE5LTguNDAxLDUuMzcxLTEzLjY4OCAgIGMwLTEuNzc2LTAuMjUtMy41LTAuNzEtNS4xMmwtMjIuMjA1LTc0LjE0OWwxOC4wNjYtMTguMDk4YzMuMDQxLTMuMDIxLDQuNzY2LTcuMjIxLDQuNzY2LTExLjUzNmMwLTQuMzM3LTEuNjgzLTguNDEyLTQuNzQ0LTExLjUxNiAgIGwtMTMuMjUtMTMuMjM5Yy0zLjAzLTMuMDQxLTcuMjIxLTQuNzc1LTExLjUzNi00Ljc3NWMtMy42NTcsMC03LjIzLDEuMjIzLTEwLjAyMSwzLjQyOGwtMy4xMDQtMTAuMzg3bDE5LjcxOC0xOS43MTggICBjMy4wMy0zLjA0MSw0Ljc1NS03LjI0Miw0Ljc1NS0xMS41NjhjMC00LjM1Ny0xLjY4My04LjQ0Mi00Ljc1NS0xMS41MDRsLTEzLjE4OC0xMy4xODhjLTMuMDQxLTMuMDgzLTcuMjYyLTQuODI4LTExLjU5OS00LjgyOCAgIGMtNC4zNTcsMC04LjU3OSwxLjc2Ni0xMS41NTcsNC44MDdsLTAuMTM2LDAuMTI1bC0yMS44NC03Mi44OTVjNy41NDUtNy4xODksMTQuNzAyLTE0LjAzNCwyMS41NDctMjAuNDgxICAgQzUyMi45MzIsMTc3Ljc2Niw1NTEuNDc5LDE1MC42ODEsNTcxLjc3MSwxMjMuNTU1eiIgZmlsbD0iI0ZGRkZGRiIvPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />
  <div class="header-right">
    <a class="<?php if($page=='Login'){echo active;}?>" href="./Login.php">Login</a>
  </div>
</div>
<?php endif?>