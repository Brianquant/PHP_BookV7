<?php 

$feld = array(11, 12, 13);
$kopie = $feld;
$kopie[0] = 42;

echo "Original: ";

for($i=0; $i<count($feld); $i++) {
    echo "$feld[$i] ";
}
echo "<br>";

echo "Kopie: ";

for($i=0; $i<count($kopie); $i++) {
    echo "$kopie[$i] ";
}
echo "<br>";




?>