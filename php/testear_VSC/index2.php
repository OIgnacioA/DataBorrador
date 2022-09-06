<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

function updateTurringArray(&$turing_array) {

    foreach($turing_array as &$value)
    {

     $value = $value + 1;

    }

    $value= $value + 2;

}

$turing_array = array (1,2,3);

echo updateTurringArray($turing_array);


?>


    
</body>
</html>