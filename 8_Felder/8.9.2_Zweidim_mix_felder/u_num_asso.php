<?php 

/** 1. Zeile 2. Zeile */
$hardware = array(
    array("Hersteller" => "Quantum", "Typ" => "Fireball CX", "GB" => 40, "Preis" => 6499, "Artnummer" => "HDA-208"),
    array("Hersteller" => "Quantum", "Typ" => "Fireball Plus", "GB" => 60, "Preis" => 5799, "Artnummer" => "HDA-207")
);

/* 3. Zeile */
$hardware[2]["Hersteller"] = "Fujitsu"; 
$hardware[2]["Typ"] = "MPE 3136"; 
$hardware[2]["GB"] = 160; 
$hardware[2]["Preis"] = 149; 
$hardware[2]["Artnummer"] = "HDA-206"; 

/* 4. Zeile */
$hardware[3]["Hersteller"] = "Lenovo"; 
$hardware[3]["Typ"] = "X1"; 
$hardware[3]["GB"] = 212; 
$hardware[3]["Preis"] = 500; 
$hardware[3]["Artnummer"] = "HDA-203"; 

/* 5. Zeile */
$hardware[4]["Hersteller"] = "Seagate"; 
$hardware[4]["Typ"] = "450A"; 
$hardware[4]["GB"] = 312; 
$hardware[4]["Preis"] = 700; 
$hardware[4]["Artnummer"] = "HDA-202"; 

echo "<table border=\"1\">";

for($i = 0; $i < 5; $i++) 
{
    echo "<tr>";
    foreach($hardware[$i] as $name=>$wert)
    {
        echo "<td>$wert</td>";
    }
    echo "</tr>";
}
echo "</table>";



?>