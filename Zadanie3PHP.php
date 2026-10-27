<?php

// Zadanie 1
echo "Zadanie 1: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br><br>";


// Zadanie 2
echo "Zadanie 2: ";
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "<br><br>";


// Zadanie 3
echo "Zadanie 3: ";
$suma3 = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma3 = $suma3 + $i;
}
echo "Suma wynosi: " . $suma3 . "<br><br>";


// Zadanie 4
echo "Zadanie 4: ";
$liczba4 = 2;
for ($i = 1; $i <= 10; $i++) {
    echo $liczba4 . " ";
    $liczba4 = $liczba4 + 2;
}
echo "<br><br>";


// Zadanie 5
echo "Zadanie 5: ";
$X = 12; 
$Y = 500; 
$suma5 = 0;
for ($i = 1; $i <= $X; $i++) {
    $suma5 = $suma5 + $Y; 
    $odsetki = $suma5 * 0.08; 
    $suma5 = $suma5 + $odsetki; 
}
echo "Kwota: " . $suma5 . " zł<br><br>";


// Zadanie 6
echo "Zadanie 6: ";
$element6 = 5;
$suma6 = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma6 = $suma6 + $element6;
    $element6 = $element6 + 10;
}
echo "Suma ciągu: " . $suma6 . "<br><br>";


// Zadanie 7
echo "Zadanie 7: ";
$cegly7 = 0;
for ($i = 10; $i >= 1; $i--) {
    $cegly7 = $cegly7 + ($i * $i);
}
echo "Cegły: " . $cegly7 . "<br><br>";


// Zadanie 8 i Zadanie 9
echo "Zadanie 8 i 9: <br>";
$X = 20; 
$Y = 5;  
$Z = 2;  
$K = 3.5; 
$cegly_sciana = 0;
$aktualny = $X;
for ($i = 1; $i <= $Y; $i++) {
    if ($aktualny < 0) $aktualny = 0;
    $cegly_sciana = $cegly_sciana + $aktualny;
    $aktualny = $aktualny - $Z;
}
$waga = $cegly_sciana * $K;
echo "- Ilość cegieł: " . $cegly_sciana . "<br>";
echo "- Waga ściany: " . $waga . " kg<br><br>";


// Zadanie 10
echo "Zadanie 10: ";
$a = 12; 
$b = 4;  
$operacja = "+"; 
if ($operacja == "+") echo $a + $b;
elseif ($operacja == "-") echo $a - $b;
elseif ($operacja == "*") echo $a * $b;
elseif ($operacja == "/") {
    if ($b != 0) echo $a / $b;
    else echo "Błąd";
}
echo "<br><br>";


// Zadanie 11
echo "Zadanie 11: ";
$N = 8;  
$X = 3;  
$Y = 4;  
$biezacy = $X;
for ($i = 1; $i <= $N; $i++) {
    echo $biezacy . " ";
    $biezacy = $biezacy + $Y;
}
echo "<br><br>";


// Zadanie 12
echo "Zadanie 12: <br>";
$pary = [[5, -3], , [3, -3]];
$indeks = 0;
do {
    $l1 = $pary[$indeks];
    $l2 = $pary[$indeks];
    $suma12 = $l1 + $l2;
    echo "- Suma $l1 i $l2 = " . $suma12 . "<br>";
    $indeks++;
} while ($suma12 != 0);
echo "<br>";


// Zadanie 13
echo "Zadanie 13: ";
$liczba = 5; 
$silnia = 1;
for ($i = 1; $i <= $liczba; $i++) {
    $silnia = $silnia * $i;
}
echo "Silnia: " . $silnia . "<br><br>";


// Zadanie 14
echo "Zadanie 14: ";
$n = 4; 
$start = 2; 
$kwadrat = $start;
for ($i = 1; $i <= $n; $i++) {
    echo $kwadrat . " ";
    $kwadrat = $kwadrat * $kwadrat; 
}
echo "<br><br>";


// Zadanie 15
echo "Zadanie 15: <br>";
$suma15 = 0;
for ($i = 1; $i <= 10; $i++) {
    $los = rand(50, 100);
    $suma15 = $suma15 + $los;
}
$srednia = $suma15 / 10;
echo "- Suma: " . $suma15 . "<br>";
echo "- Średnia: " . $srednia . "<br>";

?>
