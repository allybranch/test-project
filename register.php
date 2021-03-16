<!-- http:localhost/project/index.html -->

<!DOCTYPE html>
<html lang='en'>
    <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/styles.css">
      <style>
         .error  { display: block; font-style: italic; color: red; }
      </style>
    </head>

    <body id="register-page">

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
              <a class="active-header-btn" href="register.html">
                <li class="nav-item">
                  Register </li>
              </a>
            </div>
        </nav>
      </header>

      <!-- Main Page -->
      <div class="main-page-area" >
          <main>
            <form form method="POST" action="profile.php" class="form-signin" onsubmit="return validateSubmission()">
              <div class="logo-img-container"> <img  class="logo-img" src="images/logo1.png"> </img> </div>
              <h1 class="page-title"> Get Started </h1>
              <div class="row g-0">
                <div class="col">
                  <input type="text" id='firstname' class="form-control" placeholder="First name" aria-label="First name">
                  <span class="error message" id="fname_msg"></span>
                </div>
                <div class="col">
                  <input type="text" id='lastname' class="form-control" placeholder="Last name" aria-label="Last name">
                  <span class="error message" id="lname_msg"></span>
                </div>
              </div>
              <div class="row g-3">
                <div class="col">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" autofocus>
                </div>
              </div>
              <div class="row g-3">
                <div class="col">
                  <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                  <span class="error message" id="user_msg"></span>
                </div>
              </div>
              <div class="row g-3">
                  <div class="col">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <span class="error message" id="pwd_msg"></span>
                  </div>
              </div>
              <div class="text-center">
                <button class="btn form-btn btn-lg btn-primary" type="submit" >SIGN UP</button>
              </div
            </form>
          </main>
      </div>
    </body>

    <script>

    function showPwdInstructions(){
      var lists = document.getElementById("profile-lists");
      var friends = document.getElementById("profile-friends");
      lists.style.display = "block";
      friends.style.display = "none";
      document.getElementById("profile-title").innerHTML = " <h1> My Lists </h1>";
    

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
    <!-- Bootstrap Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>



</html>
