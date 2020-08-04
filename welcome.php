<?php
  session_start();
?>

<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel="shortcut icon" href="favicon.ico" />
  <!--font-awesome link for icons-->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" media="screen" href="assets/vendor/font-awesome/css/all.min.css" >
  <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
  <link rel="stylesheet" media="screen" href="assets/css/style.css" >
  <link rel="stylesheet" media="screen" href="assets/vendor/bootstrap/css/bootstrap.min.css" >
</head>

<body>
  <!--container start-->
  <div class="container">
    <!--header section start-->
    <header>
      <div class="wrapper">
        <h1>welcome, <?php echo $_SESSION['email'] ?></h1>
        <div>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>        
      </div>
    </header>
    <!--header section start-->
    <!--main section start-->
    <main>
    
    </main>
    <!--main section end-->

    <!--footer section start-->
    <footer>      

    </footer>
    <!--footer section end-->

  </div>
  <!--container end-->

</body>
</html>