<?php


function turing($x) {

    return str_repeat("Ñ",$x); 
}


  $a= turing(2);

  
  echo $a;


/*
function turing($x) {
 return function ($y) use ($x) {

   return str_repeat($y,$x); 
 };

}


$a= turing(2);
$b= turing(3);

echo $a(3) . $b(2);

?>

*/


?>