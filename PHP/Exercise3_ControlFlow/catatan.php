<?php
    // PENGULANGAN
    // for
    // while
    // do.. while
    // foreach | (note: pengulangan khusus array)
    
    // -FOR-
    for ($i=1; $i < 5; $i++) { 
        echo $i . "Hello World! <br>";
    }

    // -WHILE-
    $a = 0;
    while ($a <= 10) {
        echo "Hellow World! <br>";
        $a++;
    }

    // -DO.. WHILE-
    $x = 0;
    do {
        echo "Hello World? <br>";
        $x++;
    } while($x < 5);

    // PENGKONDISIAN / PERCABANGAN
    // if else
    // if else if else
    // ternary
    // switch
    $y = 30;
    if ($y < 20){
        echo "Benar!";
    } else if($y == 20){
        echo "Bingo!";
    } else {
        echo "Salah!";
    }

?>