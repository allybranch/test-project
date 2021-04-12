<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->
<?php 
        session_start(); // make sessions available
        // check that user if logged in, if not send them back to the login page
        if ($_SESSION['user']==""){
            header('Location: login.php');
        }
        require('connectdb.php');
        include('header.html');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="stylesheets/styles.css">
    </head>
    <body>
        <!-- User Information form -->
        <div class="main-page-area">
            <div class='profile-container1'>
                <form method="get" id='edit-info-form' action="acctinfo.php" >
                    <h1> Account Information </h1>
                    <!-- Form Fields -->
                    <div class="row align-items-end">
                        <div class="col-9">
                            <label for="username">Username:</label>
                            <input type="text" name='username' id="inputUsername" class="form-control" placeholder= <?php if(isset($_SESSION['user']))echo $_SESSION['user']?> disabled>
                            <span name="error" class="error message" id="user_msg"> </span>
                        </div>
                        <div class='col-3' > </div> <!-- keeping the user box as the right size -->
                    </div>
                    <div class="row g-3 align-items-end">
                        <div class="col-9">
                            <label for="password">Password:</label>
                            <input type="text" name='password' id="inputPassword" class="form-control" placeholder="Enter New Password" >
                            <span name="error" class="error message" id="pwd_msg"> </span>
                        </div>
                        <div class='col-3'>
                            <button type='submit' class="profile-button" id='save' onclick=<?php updatePwd();?>>Save</button>
                        </div>
                    </div>
                    <div class="row g-3 align-items-end">
                        <div class="col-9">
                            <label for="password">First Name:</label>
                            <input type="text" id='firstname' name='firstname' class="form-control" value=<?php getFname();?> >
                            <span class="error message" id="fname_msg"></span>
                        </div>

                        <div class='col-3'>
                            <button type='submit' class="profile-button" id='save' onclick=<?php updateFname()?> >Save</button>
                        </div>
                    </div>
                    <div class="row g-3 align-items-end">
                        <div class="col-9">
                            <label for="password">Last Name:</label>
                            <input type="text" id='lastname' name='lastname' class="form-control" value=<?php getLname(); ?>>
                            <span class="error message" id="lname_msg"></span>
                        </div>
                        <div class='col-3'>
                            <button type='submit' class="profile-button" id='save' onclick=<?php updateLname()?>>Save</button>
                        </div>
                    </div>
                    <div class="row g-3 align-items-end">
                        <div class="col-9">
                        <label for="email">Email</label>
                            <input type="email" id="inputEmail" name='email' class="form-control" value=<?php getEmail();?> >
                        </div>
                        <div class='col-3'>
                            <button type='submit' class="profile-button" id='save' onclick=<?php updateEmail()?>>Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    
    <?php 
        // SAVE FUNCTIONS
        function getFname(){
            global $db;
            // get user info from the database
            $query = "select * from users WHERE username=:user";
            $statement = $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closecursor();
            $name = "";
            foreach ($results as $result){	
                $name = $result['firstname'];
                echo $name; 
            }
        }
        function getLname(){
            global $db;
            // get user info from the database
            $query = "select * from users WHERE username=:user";
            $statement = $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closecursor();
            $name = "";
            foreach ($results as $result){	
                $name = $result['lastname'];
                echo $name;
            }
        }
        function getEmail(){
            global $db;
            // get user info from the database
            $query = "select * from users WHERE username=:user";
            $statement = $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            $statement->execute();
            $results = $statement->fetchAll();
            $statement->closecursor();
            $name = "";
            foreach ($results as $result){	
                $name = $result['email'];
                echo $name;
            }
        }

        // UPDATE FUNCTIONS
        function updatePwd(){
            global $db;
            if(isset($_GET['password'])){
                $pass=$_GET['password']; //retrieve the pwd value
                $query="UPDATE users SET password=:pwd WHERE username=:user";
                $statement= $db->prepare($query);
                $statement->bindValue(':user', $_SESSION['user']);
                $statement->bindValue(':pwd',md5($pass));//hash the pwd
                $statement->execute();
                $statement->closeCursor();
                $_SESSION['pwd']=md5(trim($pass)); //update the session
            }
        }
        function updateLname(){
            global $db;
            //update the lastname in the db
            $query="UPDATE users SET lastname=:lname WHERE username=:user";
            $statement= $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            if(isset($_GET['lastname'])){
                $pass=$_GET['lastname']; 
                $statement->bindValue(':lname',$pass);
                $statement->execute();
                $statement->closeCursor();
                getLname(); //update the screen
            }
        }
        function updateFname(){
            global $db;
            //update the firstname in the db
            $query="UPDATE users SET firstname=:fname WHERE username=:user";
            $statement= $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            if(isset($_GET['firstname'])){
                $pass=$_GET['firstname']; 
                $statement->bindValue(':fname',$pass);
                $statement->execute();
                $statement->closeCursor();
                getFname(); //update the screen
            }
        }
        function updateEmail(){
            global $db;
            //update the email in the db
            $query="UPDATE users SET email=:email WHERE username=:user";
            $statement= $db->prepare($query);
            $statement->bindValue(':user', $_SESSION['user']);
            if(isset($_GET['email'])){
                $pass=$_GET['email']; 
                $statement->bindValue(':email',$pass);
                $statement->execute();
                $statement->closeCursor();
                getEmail(); //update the screen
            }
        }
    ?>

    <script>
        /* Keep Customer Info */
        //eventually get it from the register page using php
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

    <!-- Bootstrap and JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>

