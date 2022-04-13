<?php
  class vehicle{
    public $make ;
    public $model ;
    public $color ;
    public $NumberOfWheels ;
    public $EngineNumber;
 
  // ============
  function set_make($make){
    $this -> make = $make;
  }
  function set_model($model){
    $this -> model = $model;
  }
  function set_color($color){
    $this -> color = $color;
  }
  function set_NumberOfWheels($wheels){
    $this -> $NumberOfWheels = $wheels;
  }
  function set_EngineNumber($engine){
    $this -> EngineNumber = $engine;
  }
  
  function get_make(){
    return $this -> make;
  }
  function get_model(){
    return $this -> model;
  }
  function get_color(){
    return $this -> color;
  }
  function get_NumberOfWheels(){
    return $this -> NumberOfWheels;
  }
  function get_EngineNumber(){
    return $this->EngineNumber;
  }
  }
    // ==============
  $Audi_p1 =new vehicle() ;
  $Audi_p1 -> set_make("Audi");
  $Audi_p1 -> set_color("black");
  echo $Audi_p1 -> get_make(); 
  echo "  ";
  echo $Audi_p1 -> get_color();
  ?>