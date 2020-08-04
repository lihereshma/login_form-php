<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en"> 

<head>
  <meta charset="utf-8">
  <title>Login Page</title>
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
    <!--main section start-->
    <main>
      <div class="login-form shadow p-5">
        <div class="heading center-div mb-5">
          <h3 class="text-center text-uppercase text-danger">account login</h3>
        </div>
        <div class="justify-content-center mr-0 ml-0">
          <form action="validate.php" method="POST">
            <div class="form-group">
              <label class="text-uppercase" for="email">email id</label>
              <input class="form-control" type="text" name="email" placeholder="Your Email" autocomplete="off">
            </div>
            <div class="form-group">
              <label class="text-uppercase" for="password">password</label>
              <input class="form-control" type="password" name="password" placeholder="Your Password" autocomplete="off">
            </div>
            <div class="mb-5">           
              <input type="checkbox" name="check">
              <label class="text-uppercase" for="check">remember me</label>
            </div>
            <div>
              <input class="btn btn-success" type="submit" name="login" value="Login">
            </div> 
          </form>
        </div>
        
      </div>
    </main>
    <!--main section end-->
  </div>
  <!--container end-->

</body>
</html>