<?php 

class Movie {

  public $name;
  public $director;
  public $year;

  public function __construct($_name, $_director, $_year){
    $this->name = $_name;
    $this->director = $_director;
    $this->year = $_year;
  }

}

?>