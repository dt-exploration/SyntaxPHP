<?php

//Komentari su definisani sa "//" ili #, vise redova: " /*  */ "

//Deklaracija varijabli
$a=5; $x=10;
$b="Dusan";

//Deklaracija metode
function test()
{
    //Koriscenje globalnih varijabli u funkciji
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

function param($parametar)
{
    echo "Ova funkcija je na ulazu dobila parametar:".$parametar;
}

//Poziv metode "test" i metode param(sa argumentom "ok")
test();
param("ok");

//Stampanje (prikaz) f-je test echo metodom
echo test();

//Prikaz HTML tagova pomocu echo metode
echo "<h1>DUSAN</h1>";

//Koriscenje metode vardump za prikaz tipa podatka (tip: float)
var_dump(12.12);

//Duzina stringa strlen metodom
echo strlen("Prikaz stringa");

//Definisanje konstante (mogu da se koriste u klasama i metodama)
define("SPEED",300000);
echo SPEED;

//If-else kontrolna struktura (PSR approved)
if( date("Y") > 2020) {
    echo "Not";

}   else if (date("Y") > 2000) {
    echo "Milenijum";

}   else {
    echo "Problem sa funkcijom";
}
////////////////////////////////////////////

//Switch kontrolna struktura
$color="red";
switch ($color) {

    case "red":
    echo "Vasa omiljena boja je crvena !";
    break;

    case "blue":
    echo "Vasa omiljena boja je plava !";
    break;

    case "green":
    echo "Vasa omiljena boja je zelena";
    break;
}
////////////////////////////

//While i do..while kontrolna struktura
while($a<10000) {
    echo "<b>".$a."</b>";
    $a++;
}

$ct=1;

do {
echo $ct;
$ct++;
}
while ($ct<10000);
///////////////////////////////////////
?>
