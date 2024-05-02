<?php 

class Movie{
  public $name;
  public $actors;
  public $years;

  public function __construct(string $_name, string $_actors, array $_years)
  {
    $this-> name = $_name;
    $this-> actors = $_actors;
    $this-> years = $_years; 

  }

  public function getFullInfo(){
    return "$this->name,$this->actors,$this->years";

  }
 

  

}



?>