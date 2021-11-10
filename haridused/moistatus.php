<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>...Mõistatus</title>
</head>
<body>
<h1>...mõistatus</h1>
<?php
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1=10;
$arv2=15;
//kahe arvude liitmine +
echo "Kui liidame kokku vastus on ".($arv1+$arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastus on "
    .($arv1/$arv2);

//esimene arv ruudus
echo "<br>";
echo "Esimene arv ruudus". pow($arv1,2);
echo "<br>";
//lahutamine
$arv1=20;
$arv2=5;
echo"Kui teisest arvust lahutada esimene, siis vastus on ".($arv1-$arv2);

//korrutis
echo "Kage arvude korrutus";
echo "<br>";
echo "<a href='vastus.php'>Õiged vastused</a>";

echo"<br>";
echo "<h2> Arva ära EESTI LINNANII</h2>";
echo "<br>";
$nimi="Parnu";
//teksti pikkus
echo "<br>Linnanimi pikkus - ".strlen($nimi);
echo "<br>Linnanimi 1.täht -  ".substr($nimi, 0, 1);
echo "<br>".strrev($nimi);
//Järjestab tähemärgid stringis juhuslikult ümber
echo "<br>Segane sõna on *".str_shuffle($nimi)."*";
//Otsib stringist mis tahes tähemärki antud komplektist
echo "<br>mitu korda esinevad tähed: ".strpbrk($nimi, 'u');
echo"<br>";








//esimene täht

?>

</body>
</html>