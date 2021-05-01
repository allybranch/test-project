<?php

class Title {
    public $id;
    public $info;

    public function __construct($title, $info="description", $img=NULL, $id="") {
      $this->title = $title;
      $this->info = $info;
      $this->img = $img;
      $this->id = $id;
    }

    // create and display a flipcard for the title
    public function flipCard() {
      echo '
      <a href=title.php?id=' . $this->id .'>
        <div class="flip-card" >
            <div class="flip-card-inner" >
                <div class="flip-card-front">
                    <img src=" ' . $this->img . ' " ></img>
                </div>
                <div class="flip-card-back">
                    <h6>' . $this->title . '</h6>
                    <p> ' . $this->info . '</p>
                </div>
            </div>
        </div>
      </a>
      ';
    }
}

$category1 = array();
$category1[] = new Title(
    $title = "Mean Girls",
    $info = "description",
    $img="https://movierob.files.wordpress.com/2015/02/mean-girls-poster.jpg",
    $id = "tt0377092"
  );
$category1[] = new Title(
  $title = "Date Night",
  $info = "Tina Fey",
  $img="https://img1.hulu.com/user/v3/artwork/d5e61c80-07bc-4497-a8e9-1b98d14ab72c?base_image_bucket_name=image_manager&base_image=d629c564-a046-49ed-8b06-cf931a3b8b87&operations=%5B%7B%22resize%22:%22600x600%7Cmax%22%7D,%7B%22format%22:%22jpeg%22%7D%5D",
  $id=""
);
$category1[] = new Title(
  $title = "88 Minutes",
  $info = "Ben McKenzie ",
  $img="",
  $id="tt0411061"
);
$category1[] = new Title(
  $title = "Bruce Almighty",
  $info = "Tom Shadyac",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "The Longest Yard",
  $info = "Robert Aldrich",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "Dead Poets Society",
  $info = "Paul Witt",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "When Harry Met Sally",
  $info = "Andrew Scheinmen",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "Jurassic Park",
  $info = "Stanley Winston",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "Moms' Night Out",
  $info = "Sarah Drew",
  $img="",
  $id="tt3014666"
);
$category1[] = new Title(
  $title = "Megamind",
  $info = "Tina Fey",
  $img="",
  $id=""
);

$category1[] = new Title(
  $title = "",
  $info = "",
  $img="",
  $id=""
);
$category1[] = new Title(
  $title = "",
  $info = "",
  $img="",
  $id=""
);

$category2 = array();

$category3 = array();

$category4 = array();

$category5 = array();




?>


