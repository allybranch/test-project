<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->
<?php include('header.html');
      session_start();
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
        <!-- <div class="dropdown">
            <button class="add-to-list"><img src="images/add.png" class="add-list-img"></img> Add to List </button>
            <div class="dropdown-content">
            <div name=' .$result['id'] . '><button name="want-to-watch" onclick="addToList(event)">Want to Watch</button></div>
            <div name=' .$result['id'] . ' ><button name="currently-watching" onclick="addToList(event)">Currently Watching</button></div>
            <div name=' .$result['id'] . ' ><button name="watched" onclick="addToList(event)">Watched</button></div>
        </div> -->
    </div>
  </body>

  <?php 
  // When the hidden form is submitted add the given title to the given list
  if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['addtitleID'])){ // UNFINISHED
    global $db;
    $titleID = $listname = "";
    if (isset($_GET['addtitleID'])){$titleid =$_GET['addtitleID'];}
    if (isset($_GET['listname'])){$listname =$_GET['listname'];}
    echo $titleID;
    echo $listname;
    $query = "INSERT INTO `lists` (`username`, `listname`, `titleid`) VALUES (:user, :listname, :titleid)";
    $statement = $db->prepare($query); 
    $statement->bindValue(':user', $_SESSION['user'] );
    $statement->bindValue(':listname', $listname);
    $statement->bindValue(':titleid', $titleID);
    $statement->execute();
    }
  ?>
  <!-- Jquery and Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>





