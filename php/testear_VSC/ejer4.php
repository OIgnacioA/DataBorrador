<?php
class Person {

  private $name;
  private $eyeColor;
  private $age;

  public static $drinkingAge = 21; 
  public static function setDrinkingAge($newDR){
    self::$drinkingAge = $newDR; 
  }

}

?>