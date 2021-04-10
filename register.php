<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->
<!-- This PHP checks that the username isn't already in use and "registers" the user by adding them to the users table--> 
<?php     
require('connectdb.php');
      // make sessions available
  if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['username']) > 0){
    // Get User info from form
    $first = trim($_POST['first']);
    $last = trim($_POST['last']);
    $email = trim($_POST['email']);
    $user = trim($_POST['username']);
    $pwd = md5(trim($_POST['password']));

    // See if the username is already being used (it should NOT exist in the users table)
    global $db;
      $query = "select username from users WHERE username=:user";
      $statement = $db->prepare($query); 
      $statement->bindValue(':user', $user);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();

    // Check that the query doesn't return anything
    if (count($results) == 0){
  
      //add new user to the users table
      $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES (:user, :pwd, :first, :last, :email)";
      //$query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES 'ooo','ooooooooo','ooooo', oooooo, 'lss4de@virginia.edu' ";
      $statement = $db->prepare($query); 
      $statement->bindValue(':user', $user);
      $statement->bindValue(':pwd', $pwd);
      $statement->bindValue(':first', $first);
      $statement->bindValue(':last', $last);
      $statement->bindValue(':email', $email);
      $statement->execute();
      $statement->closecursor();
      // set session attributes
      $_SESSION['user'] = $user; 
      $_SESSION['pwd'] = $pwd;
        //redirect to profile page
      header('Location: myprofile.php');
    }
    else if (count($results) > 0){ //username already in use
      echo "<script> showErrorBox(); </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/styles.css">
  </head>

  <body id="register-page">
  <?php session_start(); ?> <!-- session here -->

    <!-- Navigation Bar -->
    <header>
      <nav class="navbar navbar-expand-sm">
        <div class="navbar-brand">
          <img class=navbar-logo src="images/logo3.png" alt="">
          <a href="browse.php">GoodFilms</a>
        </div>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <a class="inactive-header-btn mx-auto justify-content-end" href="login.php">
              <li class="nav-item">
                Sign In</li>
            </a>
            <a class="active-header-btn" href="register.php">
              <li class="nav-item">
                Register </li>
            </a>
          </div>
      </nav>
    </header>

   
    <!-- Main Page -->
    <div class="main-page-area" >

      <!-- Register Form: title, image -->
          <form form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" class="form-signin" onsubmit="return validateSubmission()">
            <div class="logo-img-container"> <img  class="logo-img" src="images/logo1.png"> </img> </div>
            <h1 class="page-title"> Get Started </h1>

            <!-- Password Instructions -->
            <div id='pwdinstr' class='text-center'>
              Your password must satisfy these requirements:
              <ul>
                <div id='pwditems'>
                  <li>Cannot less than 8 characters </li>
                  <li>Must be a mix of letters, numbers and symbols </li>
                </div>
              </ul>
            </div>
          
            <!-- Error Message -->
        <div id='errorm' class='text-center' >
            Username is already in use. Please try another.
        </div>

            <!-- Register Form: fields, submit btn -->
            <div class="row g-0">
              <div class="col">
                <input type="text" id='firstname' name='first' class="form-control" placeholder="First name" aria-label="First name" autofocus>
                <span class="error message" id="fname_msg"></span>
              </div>
              <div class="col">
                <input type="text" id='lastname' name='last' class="form-control" placeholder="Last name" aria-label="Last name">
                <span class="error message" id="lname_msg"></span>
              </div>
            </div>
            <div class="row g-3">
              <div class="col">
                <input type="email" id="inputEmail" name='email' class="form-control" placeholder="Email Address" >
              </div>
            </div>
            <div class="row g-3">
              <div class="col">
                <input type="text" id="inputUsername" name='username' class="form-control" placeholder="Username" required>
                <span class="error message" id="user_msg"></span>
              </div>
            </div>
            <div class="row g-3">
                <div class="col">
                  <input type="password" id="inputPassword" name='password' class="form-control" placeholder="Password" onfocus="showPwdInstructions()" required>
                  <span class="error message" id="pwd_msg"></span>
                </div>
            </div>
            <div class="text-center">
              <button class="btn form-btn btn-lg btn-primary" type="submit" >SIGN UP</button>
            </div>
          </form>
    </div>
  </body>

  <script>
    /*Show Error Message */
    function showErrorBox(){
      var errorbox = document.getElementById("errorm");
      errorbox.style.display = "block";
    }

    /*Show Error Message */
    function showErrorBox(){
      console.log('yes');
      var errorbox = document.getElementById("errorm");
      errorbox.style.display = "block";
    }

    /*Show Password Instructions*/
    function showPwdInstructions(){
      var pwdinstr = document.getElementById("pwdinstr");
      pwdinstr.style.display = "block";
    }
    function validateSubmission(){
      if(validateFirstName() && validateLastName() && validatePassword() && validateUsername()){
        return true;
      }
      return false;
    }
    function validateFirstName(){
      var firstname= document.getElementById('firstname').value;
      if(isNaN(firstname)){
        document.getElementById('fname_msg').value="";
        return true;
      }
      else{
            document.getElementById("fname_msg").innerHTML = "Your first name cannot be numbers.";
            document.getElementById("firstname").value = firstname;
            return false;
          }
    }
    function validateLastName(){
      var lastname= document.getElementById('lastname').value;
      if(isNaN(lastname)){
        document.getElementById('lname_msg').value="";
        return true;
      }
      else{
            document.getElementById("lname_msg").innerHTML = "Your last name cannot be numbers.";
            document.getElementById("lastname").value = lastname;
            return false;
          }
    }
    /* Validate Username */
    //validate input + provide relevant error messages
    function validateUsername(){
        var username= document.getElementById('inputUsername').value;
        //username needs to be <= 20 characters
        if(username.length <= 20 && username.length > 0 && isNaN(username)){
          document.getElementById('user_msg').value = "";
          return true;
        }
        else{//otherwise it's too short
          document.getElementById("user_msg").innerHTML = "Your username cannot be longer than 20 characters.";
          document.getElementById("inputUsername").value = username;
          return false;
        }
      }
        /* Validate Password */
        //input validation + relevant error messagess
        function validatePassword(){
          var password = document.getElementById('inputPassword').value;

          //passwords need to be larger than 8 characters
          if(password.length > 8 && isNaN(password)){
            document.getElementById('pwd_msg').value = "";
            return true;
          }
          else{//otherwise it's too short
            document.getElementById("pwd_msg").innerHTML = "Your password must be longer than 8 characters.";
            document.getElementById("inputPassword").value = password;
            return false;
          }
        }
  </script>

    <!-- JQuery and Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>
