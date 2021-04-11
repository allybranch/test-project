<!-- Ally Branch (aab4ad) and Leigh Striffler (lss4de) -->

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
      <?php include('header.html');
      session_start();
      ?>

      <div class="main-page-area">

        <h1 id='header'> Search Results </h1>
        <div class="search-results">

          <!-- search results tag is open and closed after displaying the results later -->
    </body>

    <?php 
    
    require('connectdb.php');
 
    if (isset($_POST['sbar'])){//if a given title, go get the matching results
      global $db;
      $query = "select * from titles WHERE name LIKE :title ";
      $statement = $db->prepare($query); 
      $statement->bindValue(':title', '%' . $_POST['sbar'] . '%');
      $statement->execute();
      $results = $statement->fetchAll();
      $statement->closeCursor();

      $name = "";
      $year="";
      $type="";
      $rating="";
      $description="";
      echo "<script> document.getElementById('header').innerHTML+= '(" . count($results) . ")';</script>";
      foreach ($results as $result)
      {	
         $name = $result['name'];
         $year=$result['year'];
         $type=$result['type'];
         $rating=$result['rating'];
         $description=$result['description'];
         echo '<div class="search-result"> <h3 class="search-result-title"> ' . $name . '</h3>' . 
                '<h4 class = "search-result-type"> (' . $year .') </h4> 
                <div class="rating"> 
                <img src="images/star.png" class="add-list-img"> </img> <h4> ' . $rating . '</h4> /10  
                </div>
               
                <button  class="add-to-list"><img src="images/add.png" class="add-list-img"></img> Add to List </button>

                <div class="search-result-description">
                    <p>' . $description .  '</p>
                </div>

              </div> ';
      }
    }

    else{//there's no given title. give a default screen

    }

    echo "</div>"; //search results tag is open until now so we get the box border around the results
    ?>
    <!-- Jquery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </html>
