<?php

for($i=1;$i<=10;$i++){
    echo PHP_EOL."==============" . PHP_EOL;
    echo"Tabuada do $i" . PHP_EOL;
    echo"==============". PHP_EOL . PHP_EOL;
    for($c=1;$c<=10;$c++){
        echo "$i x $c = ". $i*$c . PHP_EOL;
    }
}