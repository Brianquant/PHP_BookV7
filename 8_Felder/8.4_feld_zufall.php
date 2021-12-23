<?php 

$feld = array(94, 95, 96, 97, 98);
$anzahl = 3;


if($anzahl >= 1 && $anzahl <= count($feld)) 
{
    $z = array_rand($feld, $anzahl);
    if(!is_array($z)) 
    {
        echo "$z: " . $feld[$z];
    } else {
        for($i = 0; $i < count($z); $i++) {
            echo "$z[$i]:" . $feld[$z[$i]] . " ";
        }
        echo "<br>";
    }
}

$feld = array("A" => 94, "B" => 95, "C" => 96, "D" => 97, "E" => 98);
$z = array_rand($feld, 3);
for($i = 0; $i < count($z); $i++) {
    echo "$z[$i]:" . $feld[$z[$i]] . " ";
}

echo "<br>";


?>