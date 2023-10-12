<?php
  if($_GET['logged'] == '0'){
    include_once('../assets/Usuario/perfilN.php');
  }
  else if($_GET['logged'] == '1'){
    include_once('../assets/Usuario/perfilV.php');
  }
  else if($_GET['logged'] == '2'){
    include_once('../assets/Usuario/perfilP.php');
  }
?>