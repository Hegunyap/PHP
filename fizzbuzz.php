<?php

$val = 20;

for($i = 0; $i <= $val; $i++){
    switch ($i) {
        case ($i % 3 == 0) && ($i % 5 == 0):
            # code...
            echo "FizzBuzz <br/>";
            break;
        case ($i % 3 == 0):
            # code...
            echo "Fizz <br/>";
            break;
        case ($i % 5 == 0):
            # code...
            echo "Buzz <br/>";
            break;
        default:
            # code...
            echo $i . "<br/>";
            break;
    }
}

?>