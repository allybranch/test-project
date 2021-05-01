<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->
<?php 
  session_start(); 
  // make sessions available
  // check that user if logged in, if not send them back to the login page
  // if ($_SESSION['user']==""){
  //   header('Location: login.php');
  // }
  require('connectdb.php');
  include('header.html');
  global $db;
  // get user info from the database
  $query = "select * from movies_metadata WHERE imdb_id=:id";
  $statement = $db->prepare($query);
  $titleid = "";
  if (isset($_GET['id'])){
    $titleid= $_GET['id'];
  }
  $statement->bindValue(':id', $titleid);
  $statement->execute();
  $results = $statement->fetchAll();
  $statement->closecursor();
  $title = "";
  foreach ($results as $result){	
      $title = $result['title'];
  }
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="stylesheets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="stylesheets/styles.css">
  </head>
  <body>
    <div class="main-page-area">
        <h1> <?php echo $title; ?></h1>
        <?php echo '
        <div class="dropdown">
            <form method="post">
                <button class="add-to-list"><img src="images/add.png" class="add-list-img"></img> Add to List </button>
                <div class="dropdown-content">
                    <input type="submit" name="want-to-watch" value="Want to Watch">
                    <input type="submit" name="watched" value="Watched">
                    <input type="submit" name="favorites" value="Favorites">
                </div>
            </form>
        </div>
        '; ?>
        <div class="title-description">
            <p><?php echo $result['overview']; ?></p>
        </div>
    </div>
  </body>

  <?php 
  // When the hidden form is submitted add the given title to the given list
  if ($_SERVER['REQUEST_METHOD']=='POST'){ // UNFINISHED
    $listname = 'none';
    if(isset($_POST['want-to-watch'])) {
        $listname = 'want-to-watch';
    }
    if(isset($_POST['watched'])) {
        $listname = 'watched';
    }
    if(isset($_POST['favorites'])) {
        $listname = 'favorites';
    }
    global $db;
    $query = "INSERT INTO `lists` (`listid`, `username`, `listname`, `titleid`, `title`) VALUES (NULL, :user, :listname, :titleid, :title)";
    $statement = $db->prepare($query); 
    $statement->bindValue(':user', $_SESSION['user'] );
    $statement->bindValue(':listname', $listname);
    $statement->bindValue(':titleid', $titleid);
    $statement->bindValue(':title', $title);
    $statement->execute();
    }

  ?> 




  <!-- Jquery and Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>





