<?php 


/**1. Zeile und 2. Zeile */
$hardware = array(
    array("Quantum", "Fireball CX", 40, 112, "HDA-208"),
    array("Quantum", "Fireball Plus", 80, 128, "HDA-163"),
);

/*3. Zeile */
$hardware[2][0] = "Fujitsu";
$hardware[2][1] = "MPE3136";
$hardware[2][2] = 160;
$hardware[2][3] = 149;
$hardware[2][4] = "HDA-163";

$hardware[3][0] = "Seagate";
$hardware[3][1] = "31023A";
$hardware[3][2] = 537;
$hardware[3][3] = 330;
$hardware[3][4] = "HDA-164";

$hardware[4][0] = "IBM Corporation";
$hardware[4][1] = "DJNA 372200";
$hardware[4][2] = 240;
$hardware[4][3] = 230;
$hardware[4][4] = "HDA-140";


echo "<table border=\"1\">";
for($i = 0; $i < 5; $i++)
{
echo "<tr>";
for($k = 0; $k < 5; $k++) {
echo "<td>" . $hardware[$i][$k] . "</td>";
}
echo "</tr>";
}
echo "</table>";





?>