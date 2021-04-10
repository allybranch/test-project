<!DOCTYPE html>
<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->

<html lang='en'>
  <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="stylesheets/styles.css">
      <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    <?php 
      session_start(); 
      // make sessions available
      // check that user if logged in, if not send them back to the login page
      if ($_SESSION['user']==""){
        header('Location: login.php');
      }
      require('connectdb.php');
      include('header.html');
      global $db;
      // get user info from the database
      $query = "select * from users WHERE username=:user";
      $statement = $db->prepare($query);
      if (isset($_GET['username'])){
        $username= $_GET['username'];
      }
      $statement->bindValue(':user', $username);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();
      $name = "";
      foreach ($results as $result)
      {	
         $name = $result['firstname'];
      }
    ?>
    <div class="main-page-area">
    <div class='profile-container1'>
    <h1 class='text-center' id='listcount'> <?php echo $name . "'s Profile";?></h1>
    <!-- Toggle Buttons -->
    <div class="profile-buttons">
      <button class="profile-button" onclick="ViewLists()">Lists</button>
      <button class="profile-button" onclick="ViewFriends()">Friends</button>
    </div>
    <div class="profile-container2">
      <div id='profile-title'>
        <h2 > Lists </h2>
      </div>
      <!-- User Title Lists -->
      <div id='profile-lists'>
        <h4 class="list-title"> Currently Watching </h4>
        <div class="owl-carousel owl-theme">
        </div>
        <h4 class="list-title"> Watched This Year </h4>
        <div class="owl-carousel owl-theme">
        </div>
        <h4 class="list-title"> Want To Watch </h4>
        <div class="owl-carousel owl-theme">
        </div>
      </div>
      <!-- Friends List -->
      <div id="profile-friends">
          <?php
                $query = "select * from friends WHERE username=:username";
                $statement = $db->prepare($query);
                $statement->bindValue(':username', $_GET['username']);
                $statement->execute();
                $results = $statement->fetchAll();
                $statement->closecursor();
                foreach ($results as $result){	
                    if ($result['frienduser']==$_SESSION['user']){
                        echo "<div class='friend-row' ><h4>" . $result['friendfirst'] . " " . $result['friendlast'] .  "</h4>@";
                        echo  "<a href='myprofile.php" . "'>". $result['frienduser'] . "</a></div>"; 
                    }
                    else{
                        echo "<div class='friend-row' ><h4>" . $result['friendfirst'] . " " . $result['friendlast'] .  "</h4>@"; 
                        echo  "<a href='profile.php?username=" . $result['frienduser'] . "'>". $result['frienduser'] . "</a></div>";                }
                    }

          ?>
      </div>
    </div>
    
  </body>

  <?php 


  ?>

  <!-- JQuery and Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Owl Carousel (jQuery plugin used for displaying lists/titles)-->
  <!-- Owl Carousel v2.3.4
      Copyright 2013-2018 David Deutsch
      Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE -->
  <script src="owl.carousel.js"></script>
  <!-- Initialize carousel -->
  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:5,
      nav:true,
      autoHeight:true,
      responsive:{
          0:{
              items:2
          },
          500:{
              items:3
          },
          700:{
              items:4
          },
          900:{
              items:5
          },
          1100:{
              items:6
          },
          1300:{
              items:7
          }
      }
    })
  </script>
  <script>
    /* Toggle Buttons */
    function ViewLists(){
      var lists = document.getElementById("profile-lists");
      var friends = document.getElementById("profile-friends");
      lists.style.display = "block";
      friends.style.display = "none";
      document.getElementById("profile-title").innerHTML = "<h2> Lists </h2>";
    }
    function ViewFriends(){
      var lists = document.getElementById("profile-lists");
      var friends = document.getElementById("profile-friends");
      var title =document.getElementById("profile-title");
      title.innerHTML =  "<h2> Friends </h2> ";
      lists.style.display = "none";
      friends.style.display = "block";
    }
  </script>
    <!-- Fill the New List -->
  <script type='text/template' id='carousel'>
    <h4 class='list-title'> New List </h4>
    <div class="owl-carousel owl-theme">
      <div class='item' style='height:80px !important; width:135px'>
        <img style='height: 100%; background-color:grey'/>
      </div>
    </div>
  </script>
</html>