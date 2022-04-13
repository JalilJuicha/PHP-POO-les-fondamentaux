
<?php
	class vehicule{
    public $make ;
    public $model ;
    public $color ;
    public $NumberOfWheels ;
    public $EngineNumber;
 
  // ============
  public function __construct($make,$model,$color,$Wheels,$engine){
    $this -> make = $make;
    $this -> model = $model;
    $this -> color = $color;
    $this -> NumberOfWheels = $Wheels;
    $this -> EngineNumber = $engine;
  }
  
  public function get_info(){
   echo $this->make. " " . $this->model. " " . $this->color. "" .$this->NumberOfWheels. " " .$this->EngineNumber;
  }
  }
  
  $Mc_p1 = new vehicule("McLaren","2021", "Orange","4" , "5371334");
  $mustung_gt500 = new vehiucle("Mustung","2019", "Black" , " 4 " , 82736323);
  
  echo $Mc_p1 -> get_info();
  echo "     ";
  echo $mustung_gt500 -> get_info();
?>
