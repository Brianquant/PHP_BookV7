<?php 
/** 1. Zeile 2. Zeile */
$pers = array(
    array("Nachname" => "Maier", "Vorname" => "Maier", "Pnr" => 81343, "Gehalt" => 3500) ,
    array("Nachname" => "Schmidt", "Vorname" => "Peter", "Pnr" => 6714, "Gehalt" => 3750)
);

/**3. Zeile */
$pers[2]["Nachname"] = "Boyka"; 
$pers[2]["Vorname"] = "Juri"; 
$pers[2]["Pnr"] = 67323; 
$pers[2]["Gehalt"] = 5500; 

echo "<table border=\"1\">";

for($i = 0; $i < 3; $i++) 
{
    echo "<tr>";
    foreach($pers[$i] as $name=>$wert)
    {
        echo "<td>$name: $wert</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>