<?php

  session_start();

  $dbServerName = "localhost";
  $dbUserName = "root";
  $dbPassword = "";
  $dbName = "loginsystem";

  $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

  if(isset($_POST['login'])) {
    $userName = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user_email = '$userName' AND user_pwd = '$password'";
    $query = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($query);
    if($row == 1) {
      echo "login successful";
      if(isset($_POST['check'])) {
        setcookie('email', $userName);
      } 
      $_SESSION['email'] = $userName;
      header('location: welcome.php');
    } else {
      echo "login failed";
      header('location: index.php');
    }
  }

  // $myEmail = "reshmalihe00068@gmail.com";
  // $myPassword = "12345";

  // if(isset($_POST['login'])) {
  //   $email = $_POST['email'];
  //   $password = $_POST['password'];
    
  //   if($email == $myEmail && $password == $myPassword) {
  //     if(isset($_POST['check'])) {
  //       setcookie('email', $email);
  //     } 
  //     session_start();
  //     $_SESSION['email'] = $email;
  //     header('location: welcome.php');     
  //   } 
  //   else {
  //     echo "inavalid";
  //   }
  // } 
  // else {
  //   header('location: index.php');
  // }
?>