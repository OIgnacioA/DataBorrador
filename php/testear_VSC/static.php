<?php

class pru {

    protected static function get(){
      echo "hola1";
    }



    public static function youare() {
        echo "hola3";
    }


}




class pru2 extends pru {

    public static function get(){
      echo "hola2";
    }

}


$a= new pru2; 

$aget();






?>