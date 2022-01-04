<?php 

/* Die Informationen werden aus der Datenbank geholt */
$con = mysqli_connect("", "root", "", "hardware");
$res = mysqli_query($con, "SELECT * FROM fp");


echo "<table border='1'>";
echo "<tr>";
echo "<td>Artnummer</td>" . "<td>GByte</td>" . "<td>Preis</td>" . "<td>€/GByte</td>";
echo "</tr>";
echo "<table border=\"1\">";

/* Die Datasets werden ausgelesen */
while($dset = mysqli_fetch_assoc($res))
{
    /* Der schlüssel wird ermittelt, als Stringkette */
    $ax = $dset["artnummer"];

    /*Die Informationen aus dem Datasets werden ueber den Schluessel gespeichert */
    $tab[$ax]["gb"] = $dset["gb"];
    $tab[$ax]["preis"] = $dset["preis"];
    $plv = $tab[$ax]["gb"] / $tab[$ax]["preis"];
    $plv_array = array();
    array_push($plv_array, number_format($plv, 2, ',', ' '));
    // var_dump($plv_array);
    foreach($plv_array as $plv_item) 
    {
        $plv_outcome = "<td>$plv_item</td>";
        echo $plv_outcome;   

        
    }
       
}
 

mysqli_close($con);

/* Alle Datasets werden mit allen Inhalten dargestellt */
foreach($tab as $dname => $dwert)
{   echo "<tr>";
    /* Der Schluessel wird ausgegeben */
    echo "<td>$dname</td>";

    foreach($dwert as $name => $wert) 
    {
    echo "<td>$wert</td>";
    } 
}

echo "</tr>";
echo "</table>";






?>