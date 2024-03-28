<?php

session_start();
include 'connect.php';



if (isset($_SESSION['user'])) {
    
  header('location: dashboard.php'); 
  exit();

}else if (isset($_SESSION['username'])) {
  unset($_SESSION['username']);
  header('location: ../login.php'); 
  exit();  

}else {

  header('location: ../login.php'); 
  exit();  

}







