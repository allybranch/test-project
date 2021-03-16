<!DOCTYPE html>
<html lang='en'>

    <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/styles.css">
 
    </head>

<body>
    <?php include('header.html')?>

    <!-- Customer Information form -->
    <div class="main-page-area">
        <div class='profile-container1'>
            
            <form method="POST" id='loginform' action="acctinfo.php" onsubmit="return saveInfo()" >
                <h1> Account Information </h1>  
                <div class="row g-3">
                    <div class="col">
                    <input type="text" name='username' id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                    <span name="error" class="error message" id="user_msg"> </span>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <input type="password" name='password' id="inputPassword" class="form-control" placeholder="Password" required>
                    <span name="error" class="error message" id="pwd_msg"> </span>
                    <div class="form-group showPassword">
                        <input  type="checkbox" id="showPassword" /> Show password
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <input type="text" id='firstname' class="form-control" placeholder="First name" aria-label="First name">
                    <span class="error message" id="fname_msg"></span>
                </div>
            </div>

            <div class="row g-3">
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

            <div class="text-center">
                <button type='submit' class="btn btn-lg btn-primary form-btn" id='save' >Save</button>
            </div

            </form>
         </div>
    </div>

    <script>
        
        /* Keep Customer Info */
            //eventually get it from the register page
        function saveInfo(){

            var firstname = document.getElementById('firstname').value;
            document.getElementById('firstname').value= firstname;

            var lastname = document.getElementById('lastname').value;
            document.getElementById('lastname').value= lastname;

            var usr = document.getElementById('inputUsername').value;
            document.getElementById('inputUsername').value= usr;

            var pwd = document.getElementById('inputPassword').value;
            document.getElementById('inputPassword').value= pwd;

            var email = document.getElementById('inputEmail').value;
            document.getElementById('inputEmail').value= email;

            return false; //until we actually have this info in a db

        }
    </script>


    <!-- This is for the hamburger dropdown -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>