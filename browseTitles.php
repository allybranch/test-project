<?php

class Title {
    public $id;
    public $info;

    public function __construct($title, $info="description", $img=NULL) {
      $this->title = $title;
      $this->info = $info;
      $this->img = $img;
      $this->id = "";
    }

    // create and display a flipcard for the title
    public function flipCard() {
      echo '
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
      ';
    }
}

$category1 = array();
$category1[] = new Title(
    $title = "Arrested Devlopment",
    $info = "description",
    $img="https://occ-0-2433-2430.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABVpWLG11PojFPeqpJyc14l1iTPUtb-7K9nONUphboJDuTEUdXQNfPgHzcttWQhMCSvsS6SSo5qmheyWPwmLPGmqpfCGXV8MvxrJMeLUbMgxLFAOgxWcw8on2bnW3.jpg?r=748"
);

$category2 = array();

$category3 = array();

$category4 = array();

$category5 = array();




?>


