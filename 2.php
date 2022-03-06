<?php
    echo PHP_VERSION; //7.2.11
    echo "<br>", 2**10, "<br>"; //1024

    $x=10;
    $y=5;
    echo $x<=>$y, "<br>";

    $x=1;
    $y=1.0;
    echo gettype($x),"<br>"; //integer
    echo gettype($y), "<br>"; //double

    //równe
    if ($x==$y){
        echo "Rowne<br>";
    }else {
        echo "Rozne<br>";
    }

    //identyczne
    if ($x===$y){
        echo "Identyczne<br>";
    }else {
        echo "Nieidentyczne<br>";
    }

    /*
    preinkrementacja ++$i
    postinkrementacja $i++
    predekrementacja --$i
    postdekrementacja $i--
    */

    $x=1;
    echo $x; //$x=1
    $x=$x++;
    echo $x; //$x=1
    $x=++$x;
    echo $x; //$x=2
    $y=++$x;
    echo $x; //$x=3
    echo $y; //$y=3
    $y=$x++;
    echo $x; //$x=4
    echo $y; //$y=3
?>
