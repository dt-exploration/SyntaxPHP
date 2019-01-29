<?php

//Komentari su definisani sa "//" ili #, vise redova: " /*  */ "

//Deklaracija promenljivih
$a=5; $x=10;
$b="D.T.";

//Deklaracija metode
function test()
{
    //Koriscenje globalne promeljive u funkciji
    global $x;
    global $a;
    echo $x;

    //Aritmeticke operacije
    $n=$x+2; $m=$x-1; $k=$x*10; $l=$x/4;

    //Moduo i ekxponenti
    $g=$a%2;
    $g=$a**2;

    //Konketinacija (implementira se tackom)
    echo "Kvadrat broja je: ".$g;

    return 1;
}

//Poziv metode "test"
test();

//Stampanje (prikaz)
echo test();

//Ispustanje HTML tagova pomocu echo funkcije
echo "<h1>DUSAN</h1>";

//Koriscenje funkcije vardump za prikaz tipa podatka (tip: float)
var_dump(12.12);

//Duzina stringa strlen metodom
echo strlen("Prikaz stringa");

//Definisanje konstante (mogu da se koriste u klasama i metodam
define("SPEED",300000);
echo SPEED;

if( date("Y") > 2020) {
    echo "Not";

}   else if (date("Y") > 2000) {
    echo "Milenijum";

}   else {
    echo "Problem sa funkcijom";
}


?>
