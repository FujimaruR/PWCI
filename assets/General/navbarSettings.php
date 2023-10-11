<?php
  if($_GET['logged'] == '0'){
    include_once('../assets/General/navbarGen.php');
  }
  else if($_GET['logged'] == '1'){
    include_once('../assets/Usuario/navbarUser.php');
  }
  else if($_GET['logged'] == '2'){
    include_once('../assets/Vendedor/navbarSeller.php');
  }
  else if($_GET['logged'] == '3'){
    include_once('../assets/Admin/navbarAdmin.php');
  }
  else if($_GET['logged'] == '4'){
    include_once('../assets/Vendedor/navbarSellerVd.php');
  }
?>