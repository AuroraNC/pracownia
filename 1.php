<?php
    $name="Janusz";
    echo "Imie: $name<br>";
    echo 'Imie: $name<br>';

    //konkatenacja (.)
    echo "Imie: ".$name."<br>";
    
    //interpolacja (,)
    echo "Imie: ",$name,"<br>";

//typy danych
    //booLeen
    $prawda=true;
    $falsz=false;
    echo $prawda; //1
    echo $falsz; //nic nie wyswietli

    //integer
    $dec=10;
    $bin=0b1011;
    $oct=010;
    $hex=0x10;
    echo "<br>$dec";
    echo "<br>$bin";
    echo "<br>$oct";
    echo "<br>$hex";

    echo gettype($hex); //integer
    echo gettype($prawda); //booLean

    //zmiennoprzecinkowe
    $x=10.5;
    echo gettype($x); //double

    $name="Anna";
    echo "<br>Nazwa zmiennej \$name imię: $name";

    //heredoc
    $surname="Nowak";
    echo <<<ETYKIETA
        <br>
        imie i nazwisko: $name $surname
        <hr>
ETYKIETA;
?>
