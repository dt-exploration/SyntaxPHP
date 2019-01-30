<?php

//Komentari su definisani sa "//" ili #, vise redova: " /*  */ "

//Deklaracija varijabli
$a=5; $x=10;
$b="Dusan";

//Metoda za vreme/datum
echo "Today is: ".date("l")." ".date("d/m/Y");
echo "<br>";
echo "Current time: ";
echo date("H:i:s");
echo "<br>";

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

//Poziv metode test i void metode param(sa argumentom "ok")
test();
param("ok");

//Stampanje (prikaz) metodom ECHO
echo test();

//Prikaz HTML-a metodom ECHO
echo "<h1>DUSAN</h1>";

//Koriscenje metode var_dump za prikaz tipa podatka (tip: float)
var_dump(12.12);

//Duzina stringa strlen metodom
echo strlen("Prikaz stringa");

//Definisanje konstante (mogu da se koriste u svim klasama i metodama)
define("SPEED", 300000);
echo SPEED;

//If-else kontrolna struktura (PSR approved)
if (date("Y") > 2020) {
    echo "Not";

} else if (date("Y") > 2000) {
    echo "Milenijum";

} else {
    echo "Problem sa funkcijom";
}
////////////////////////////////////////////

//Nizovi (Arrays)
$niz_integer=array(1, 2, 3, 4, 5);
$niz_string=array("a", "10", "c", "d", "e");
$niz_for_sorting=array(6, 8, 7, 3, 1, 6, 0, 9, 8, 9, 5, 6, 4, 5, 7,
                       3, 5, 4, 9, 2, 4, 0, 6, 1, 5);

$niz_assoc=array("Rex"=>'26', "Dutja"=>'25', "Ix"=>'24', "Pafi"=>'29');

$matrica=array(array(1,2,3,4,5),array(9,8,7,6,5));
echo $matrica[1][2];

echo count($niz_integer);
sort($niz_for_sorting);
rsort($niz_for_sorting);
print_r($niz_for_sorting);

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

    default:
        echo "Pogresan parametar";

}
////////////////////////////

//While i do..while kontrolna struktura
while ($a < 10) {
    echo "<b>".$a."</b>";
    $a++;
}

$ct=1;
do {
    echo $ct;
    $ct++;

} while ($ct < 10);
///////////////////////////////////////

//For i foreach kontrolna struktura
for ($i = 0; $i < 10; $i++) {
    echo "<b>DUSAN</b><br>";
}

foreach ($niz_string as $var) {
    echo "<b>$var</b><br>";

    //Logicki operator (ternarni operator)  ?
    //Izjave NISU void, nego return, potrebno ih je uhvatiti sa echo
    echo $var == 10 ?  ("Broj 10<br>") : ("Nije broj 10<br>");
}

foreach ($niz_assoc as $vrednost=>$kljuc) {
    echo $vrednost;
    echo $kljuc;
}
/////////////////////////////////

//Superglobalne matrice
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

//Kroz url poslati: .php?a=5, i ubrati preko superglobala _GET
echo $_GET['a'];
?>
