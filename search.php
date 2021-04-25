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
      <h1 id='heading'> Search Results </h1>
      <form id="add-list-form" method="GET" style="display:none;">
        <input type="hidden" id="addtitleID" name="" required/>
        <input type="hidden" id="listname" name="" required/>
      </form>
      <div class="search-results">
        <?php 
        // Find and display search results
        require('connectdb.php');
        if (isset($_POST['sbar'])){
          global $db;
          $query = "select * from movies_metadata WHERE title LIKE :title LIMIT 100";
          $statement = $db->prepare($query); 
          $statement->bindValue(':title', '%' . $_POST['sbar'] . '%');
          $statement->execute();
          $results = $statement->fetchAll();
          $statement->closeCursor();
          $name = $year = $type = $rating = $description = "";

          //show the number of search results on the screen
          echo "<script> document.getElementById('heading').innerHTML+= '(" . count($results) . ")';</script>";

          //format and display each result
          foreach ($results as $result){	
            $name = $result['title'];
            $year=$result['release_date'];
            $id=$result['imdb_id'];
            $rating=$result['vote_average'];
            $description=$result['overview'];
            echo '<div class="search-result"> <h3 class="search-result-title"><a href="title.php?id='. $id . '">' . $name . '</a></h3>' . 
                    '<h4 class = "search-result-type"> (' . $year .') </h4> 
                    <div class="rating">
                    <img src="images/star.png" class="add-list-img"> </img> <h4> ' . $rating . '</h4> /10  
                    </div>
                    <div class="search-result-description">
                        <p>' . $description .  '</p>
                    </div>
                  </div> ';
          }
        }
        ?>
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

  <script>
    function addToList(e){ // UNFINISHED FUNCTION
      // When the addToList button is pressed update and submit hidden form with values for titleID and list_name
      titleid = e.target.parentElement.name;
      listname = e.target.name;
      document.getElementById("addtitleID").value = titleid;
      document.getElementById("listname").value = listname;
      //document.getElementById("add-list-form").submit();
    }
  </script>

  <!-- Jquery and Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>

  <?php 
  /* ANGULAR TO PHP */
  // console.log('You submitted value: ', form);
  //   this.data_submitted = form;

  //   // console.log(this.data_submitted, this.data_submitted.name.length);
  //   console.log('form submitted ', form);

  //   //prepare to send a request to the backend php
  //   //1. convert form data to appropriate format aka json
  //   let params = JSON.stringify(form);

  //   //2. send an http request to the backend
  //   //get or post request

  //   //sent a post request
  //   //post<return_type>('url',data)
  //   this.http.post<Order>('http://localhost/inclass/http-backend.php',params)
  //   .subscribe((phpresponse) => {
  //     //success, use response in some way
  //     this.responsedata =phpresponse;
  //     console.log(this.responsedata);
  //   },(error_in_comm) => {
  //     //error occurs, handle it in some way
  //     console.log('error occurs ', error_in_comm);
  //   })
  
  ?>