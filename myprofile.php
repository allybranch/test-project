<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->
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
      $statement->bindValue(':user', $_SESSION['user']);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();
      $first = "";
      $last = "";
      foreach ($results as $result)
      {	
         $first = $result['firstname'];
         $last = $result['lastname'];
      }
?>
</script>
<!DOCTYPE html>
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
    <div class="main-page-area">
      <div class="profile-container1">
      <h1 class='text-center' id='listcount'> Welcome Back <?php echo $first?>! </h1>
      <!-- Toggle Buttons -->
      <div class="profile-buttons">
        <button class="profile-button" onclick="ViewLists()">My Lists</button>
        <button class="profile-button" onclick="ViewFriends()">My Friends</button>
      </div>
      <div class="profile-container2">
        <div id='profile-title'>
          <h2 > My Lists </h2>
        </div>
        <button id="new-friend-button" onclick="addFriend()">Add Friend</button>
        <!-- User Title Lists -->
        <div id='profile-lists'>
          <h4 class="list-title"> Want To Watch </h4>
          <div class="owl-carousel owl-theme">
            <?php
                  $query = "select * from lists WHERE username=:username AND listname='want-to-watch'";
                  $statement = $db->prepare($query);
                  $statement->bindValue(':username', $_SESSION['user']);
                  $statement->execute();
                  $results = $statement->fetchAll();
                  $statement->closeCursor();
                  foreach ($results as $result)
                  {	
                  echo'
                    <div class="item">
                      <div class = "title-item title-item-3">
                        <a href="title.php?id='. $result['titleid'] .'">' . $result["title"] . '</a>
                      </div>
                    </div>';                }
                ?>
            </div>
          <h4 class="list-title"> Watched </h4>
          <div class="owl-carousel owl-theme">
          <?php
                $query = "select * from lists WHERE username=:username AND listname='Watched'";
                $statement = $db->prepare($query);
                $statement->bindValue(':username', $_SESSION['user']);
                $statement->execute();
                $results = $statement->fetchAll();
                $statement->closeCursor();
                foreach ($results as $result)
                {	
                echo'
                  <div class="item">
                    <div class = "title-item title-item-2">
                      <a href="title.php?id='. $result['titleid'] .'">' . $result["title"] . '</a>
                    </div>
                  </div>';                }
              ?>
          </div>
          <h4 class="list-title"> Favorites </h4>
          <div class="owl-carousel owl-theme">
              <?php
                $query = "select * from lists WHERE username=:username AND listname='Favorites'";
                $statement = $db->prepare($query);
                $statement->bindValue(':username', $_SESSION['user']);
                $statement->execute();
                $results = $statement->fetchAll();
                $statement->closeCursor();
                foreach ($results as $result)
                {	
                echo'
                  <div class="item">
                    <div class = "title-item title-item-1">
                      <a href="title.php?id='. $result['titleid'] .'">' . $result["title"] . '</a>
                    </div>
                  </div>';                }
              ?>
          </div>
        </div>
        <!-- Friends List -->
        <div id="profile-friends">
            <form id="add-friend-form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <div class="row">
              <div class="col">
                <input type="text" name='friendusername' id="friendUsername" class="form-control" placeholder="Username" required>
              </div>
              <div class="col">
                <button type='submit' class='add-friend-btn' id='save'>Add </button>
              </div>
            </div>
          </form>
          <div id="profile-friends-list">
            <?php
              $query = "select * from friends WHERE username=:username";
              $statement = $db->prepare($query);
              $statement->bindValue(':username', $_SESSION['user']);
              $statement->execute();
              $results = $statement->fetchAll();
              $statement->closeCursor();
              foreach ($results as $result)
              {	
                  echo "<div class='friend-row' ><h4>" . $result['friendfirst'] . " " . $result['friendlast'] .  "</h4>@";
                  echo  "<a href='profile.php?username=" . $result['frienduser'] . "'>". $result['frienduser'] . "</a></div>";    
              }
            ?>
          </div>
        </div>
    </div>
  </body>
  <script> 
  /* View Friends Toggle */ 
    function ViewFriends(){
          var lists = document.getElementById("profile-lists");
          var friends = document.getElementById("profile-friends");
          var title =document.getElementById("profile-title");
          title.innerHTML =  "<h2> My Friends </h2> ";
          lists.style.display = "none";
          friends.style.display = "block";
          friendBtn=document.getElementById("new-friend-button");
          friendBtn.style.display='block';
        }
      </script>
    <?php
    if(isset($_SESSION['toggle']) && $_SESSION['toggle']=='true'){ //should display the friends lists
      echo "<script> ViewFriends(); </script>";
    }
    # Add a friend to list by username)
    if ($_SERVER['REQUEST_METHOD'] == "POST" && strlen($_POST['friendusername']) > 0){
      global $db;
      echo "hello";
      echo $first;
      echo $last;
      $friendusername = trim($_POST['friendusername']);
      $query = "select * from users WHERE username=:user";
      $statement = $db->prepare($query);
      $statement->bindValue(':user', $friendusername);
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closecursor();
      foreach ($results as $result){	
        $friendfirst = $result['firstname'];
        $friendlast = $result['lastname'];
      }
      $query = "INSERT INTO `friends` (`username`, `frienduser`, `friendfirst`, `friendlast`) VALUES (:user, :friend, :friendfirst, :friendlast)";
      $statement = $db->prepare($query); 
      $statement->bindValue(':user', $_SESSION['user'] );
      $statement->bindValue(':friend', $friendusername);
      $statement->bindValue(':friendfirst', $friendfirst);
      $statement->bindValue(':friendlast', $friendlast);
      $statement->execute();
      $query = "INSERT INTO `friends` (`username`, `frienduser`, `friendfirst`, `friendlast`) VALUES (:user, :friend, :friendfirst, :friendlast)";
      $statement = $db->prepare($query); 
      $statement->bindValue(':user', $friendusername);
      $statement->bindValue(':friend', $_SESSION['user'] );
      $statement->bindValue(':friendfirst', $first);
      $statement->bindValue(':friendlast', $last);
      $statement->execute();
      $_SESSION['toggle']='true';
      echo "<script>  window.location.href='myprofile.php';  </script>";
      }
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
      loop:false,
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
      document.getElementById("profile-title").innerHTML = "<h2> My Lists </h2>";
      friendBtn=document.getElementById("new-friend-button");
      friendBtn.style.display='none';
    }
    function addFriend(){
      friendForm=document.getElementById("add-friend-form");
      friendForm.style.display='block';      
    }
  </script>
</html>
