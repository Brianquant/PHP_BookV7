<?php 

/* Die Informationen werden aus der Datenbank geholt */
$con = mysqli_connect("", "root", "", "hardware");
$res = mysqli_query($con, "SELECT * FROM fp");

/* Die Datasets werden ausgelesen */
while($dset = mysqli_fetch_assoc($res))
{
    /* Der schlüssel wird ermittelt, als Stringkette */
    $ax = $dset["artnummer"];

    /*Die Informationen aus dem Datasets werden ueber den Schluessel gespeichert */
    $tab[$ax]["hersteller"] = $dset["hersteller"];
    $tab[$ax]["typ"] = $dset["typ"];
    $tab[$ax]["gb"] = $dset["gb"];
}
mysqli_close($con);

/* Alle Datasets werden mit allen Inhalten dargestellt */
echo "<table border=\"1\">";
foreach($tab as $dname => $dwert)
{
    echo "<tr>";
    /* Der Schluessel wird ausgegeben */
    echo "<td>$dname</td>";

    foreach($dwert as $name => $wert) 
    {
    echo "<td>$wert</td>";
    }
    echo "</tr>";
}

echo "</table>";

/* Beispielinformationen werden ausgegeben */
echo "<p>";
echo $tab["123456"]["hersteller"];
echo $tab["123456"]["typ"];
echo $tab["123456"]["gb"];
echo "</p>";




?>