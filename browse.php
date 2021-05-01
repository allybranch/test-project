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
    <?php include('header.html') ?>
    <?php include('browseTitles.php') ?>
    <div class="main-page-area">
      <h1 class="page-title"> Explore New Titles </h1>
      <h4 class="list-title"> Featuring UVA Alumni </h4>
      <div class="owl-carousel owl-theme .row1">
          <?php
            foreach ($category1 as $title){
              echo '<div class="item">';
              $title -> flipcard();
              echo '</div>';
            }
          ?>
      </div>
      <h4 class="list-title"> Category 2 </h4>
      <div class="owl-carousel owl-theme">
      <?php
            foreach ($category2 as $title){
              echo '<div class="item">';
              $title -> flipcard();
              echo '</div>';
            }
      ?>
      </div>
      <h4 class="list-title"> Category 3 </h4>
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcNq_f3xil9rB7t0sU7ddKmOWSIwych4nLQPT1u0j9Dgoq_A498yOFiomQ3iy1Y20RmtYtfmfIQO8UFmtihtRqZgTb4.webp?r=7f8"></img>
              </div>
              <div class="flip-card-back">
                <h6> Soul Surfer </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdNSbsHUBfBHVwtUvE66H-rAWxKv5LxMgQWFb7KJuAJpUoo3BhMvo7wo74jEab5eDzi6Q-SfPOPiMFRJ7I3hJHA0qKs.webp?r=ad7"></img>
              </div>
              <div class="flip-card-back">
                <h6> The Pursuit of Happyness </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABXJHZhM9u4-hwchCc3xsTFVTibvn8KcplRzRH2zMKAvsWaIjYot-pU08D0j6d7D2xZZ3H0UsxdYYL2b2hLfLfRzQX8Y.webp?r=73b"></img>
              </div>
              <div class="flip-card-back">
                <h6> Silver Linings Playbook </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVLuOhe_nQy5456v750ImC2pv5cft_LYLbX1YZ7UAQZfwb1NI4fRnPyZyj3HEbl5TDTlAJwt4e49u3IghYtIDeCHEOo.webp?r=c15"></img>
              </div>
              <div class="flip-card-back">
                <h6> Inception </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABefEpmjanjTftb881W_YZ_rWV380_uVc5sw2LbAvyjfwIfkyJ0mwZj1Pm_XlUnr6iJaG0sAscF4LOY7tGUr6D6ZcmOE.webp?r=e70"></img>
              </div>
              <div class="flip-card-back">
                <h6> The Dark Knight </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABd5Q66-LLwMrV8ekr5kx6Op5Y-1SeHQSEx8lhX9MCvS3rgV-1G_mUhPBqrixDts-L_AOdPj_dwIM0enLVdp9dx2EWxk.webp?r=75a" ></img>
              </div>
              <div class="flip-card-back">
                <h6> The Lorax </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZbb6-6vKOnmmBhexVDoKA_hSSUgm6rVVjH7qfYvrgDiydTAl00ppsMIHsszQhtjbeujt_T4ZGrOXXwQwJwirwE5VY4.webp?r=698"></img>
              </div>
              <div class="flip-card-back">
                <h6> The Social Network </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQM6EUj6d63xEPuknIxwJHUzpSTElpsxETxIjehMgwpt6lSIcCzYStqTlQPLXN_zwLfq84Le8WqWLOtVpodfShne2MI.webp?r=5ec"></img>
              </div>
              <div class="flip-card-back">
                <h6> Scott Pilgrim VS the World </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbIUwotP035y7X3je_qM4KNLYKy1wDXFY_AgZXmYTmsuNbZSx5AhrsAFkOvb2a03brMEHK2RIXHQAGZk0rPAyxrXFrU.webp?r=a42"></img>
              </div>
              <div class="flip-card-back">
                <h6> Crazy Stupid Love </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeaodi9BZRTh3G9T7tFv0lm2G1sjmQk7DrTTpVX1hrpWZ3I2ySKItZgB4ryigD7rSeKr3X1JV2d7OpiUYBnImXFPfgU.webp?r=1ab"></img>
              </div>
              <div class="flip-card-back">
                <h6> Superbad </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV-VLsnXyIZykNmvzVJyuwgH8OGyzSTf-7JjApP0ebIQgMSPdjPbvf5xI6FkOmKee7BGwkT5uWvU9p2TrM4xAXTuvWk.webp?r=f24"></img>
              </div>
              <div class="flip-card-back">
                <h6> The Princess and the Frog </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="flip-card" >
            <div class="flip-card-inner" >
              <div class="flip-card-front">
                <img src="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQD8m-2mxOHI8Ut091vswaxKjsEtVBbHlZaZMDWqj1LIBF3LsWK0aIyFINwtbLzmM4RQf14mizuQNJeEBilq2bvskfc.webp?r=c9f" ></img>
              </div>
              <div class="flip-card-back">
                <h6> 17 Again </h6>
                <p> Description </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Owl Carousel (jQuery plugin used for displaying lists/titles)-->
  <!-- Owl Carousel v2.3.4
      Copyright 2013-2018 David Deutsch
      Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE -->
  <script src="owl.carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Initialize Carousel(s) -->
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:5,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            600:{
                items:3
            },
            800:{
                items:4
            },
            1000:{
                items:5
            },
            1200:{
                items:6
            }
        }
      })
    </script>
</html>
