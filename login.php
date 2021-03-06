<?php 
session_start(); 
$_SESSION['user'] = "";
?> <!-- session here -->

<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->

<!DOCTYPE html>
<html lang='en'>
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/styles.css" type="text/css">
      <link rel="shortcut icon" href="images/logo4.png" type="image/x-icon">
      <title> Login </title>
      <style>
        .error  { display: block; font-style: italic; color: red; }
      </style>
      
  </head>

  <!-- Navigation Bar -->
  <header>
    <nav class="navbar navbar-expand-sm">
      <div class="navbar-brand">
        <img class="navbar-logo" src="images/logo3.png" alt="">
        <a href="">GoodFilms</a>
      </div>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <a class="active-header-btn justify-content-end navbar-dark" href="login.php">
            <li class="nav-item">Sign In</li>
          </a>
          <a class="inactive-header-btn" href="register.php">
            <li class="nav-item">Register</li>
          </a>
        </ul>
      </div>
    </nav>
  <header>

  <!-- Main Page -->
  <body id="login-page">
    <div class="main-page-area">
        <form method="POST" class="form-signin" id='loginform' action="<?php $_SERVER['PHP_SELF'] ?>" onsubmit="return validateSubmission()">
          <div class="logo-img-container"> <img class="logo-img" src="images/logo1.png"> </img> </div>
          <h1 class="page-title"> Sign In </h1>
          <!-- Error Message -->
          <div id='error' class='text-center'>
              Username and password were not found. Please try again.
          </div>
          <div class="login-row row g-3">
            <div class="col">
              <input type="text" name='username' id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            </div>
          </div>
          <div class="login-row row g-3">
              <div class="col">
                <input type="password" name='password' id="inputPassword" class="form-control" placeholder="Password" required>
                <div class="form-group showPassword">
                  <input  type="checkbox" id="showPassword" /> Show password
                </div>
              </div>
          </div>
          <div class="text-center">
            <button class="btn btn-lg btn-primary form-btn" id='submit' type="submit">SIGN IN</button>
          </div>
        </form>
    </div>
  </body>

  <script>
    /*Show Error Message */
    function showErrorBox(){
      var errorbox = document.getElementById("error");
      errorbox.style.display = "block";
    }
  </script>
  <script>
    /* Show / Hide Password  */
    //anonymous function + event listener
    (function() {
    var pwd = document.getElementById("inputPassword"); // get password input
    var show = document.getElementById("showPassword"); // get checkbox input

    show.addEventListener("change", function() { // when user clicks checkbox
        try {
        if (show.checked)
              pwd.type ="text"; // change type of password box to text, thus show the entry
        else
              pwd.type = "password"; // change type of password box to password, thus mask the entry
        } catch(error) {
          alert("Cannot switch type");
        }
    }, false);
    }());
  </script>

  <?php 
    // checks that a user with the given username and password exists, and sets the session variables -->
    require('connectdb.php');
    if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['username']) > 0){
      $user = trim($_POST['username']);
      $pwd = md5(trim($_POST['password']));

      # Check that the username and password combo are correct (that they exist in the users table)
      global $db;
      $query = "select username, password from users WHERE username=:user AND password=:pwd LIMIT 1";
      $statement = $db->prepare($query); 
      $statement->bindValue(':user', $user);
      $statement->bindValue(':pwd', $pwd);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();
      if (count($results) > 0){
        $_SESSION['user'] = $user; 
        $_SESSION['toggle']=false;
        echo $_SESSION['user'];
        header('Location: myprofile.php');
      }
      else{ //username and password not found
        echo "<script>  showErrorBox(); </script>";
      }
    }
  ?>

  <!-- Bootstrap and JQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>