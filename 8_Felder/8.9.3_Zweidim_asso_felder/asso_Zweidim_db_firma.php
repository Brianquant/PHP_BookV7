<?php 

/**Die Informationen werden aus der Datenbank geholt */
$con = mysqli_connect("", "root", "", "firma");
$res = mysqli_query($con, "SELECT * FROM mitarbieter");

/**Die Datensätze werden einzeln gelesen */
while($dsatz = mysqli_fetch_assoc($res)) 
{
    /**Der Schlüssel wird ermittelt, als Zeichenkette */
    $ax = $dsatz["bic"];
    /**Die informationen aus dem Datensatz werden über den Schlüssel gespeichert */
    $tab[$ax]["vorname"] = $dsatz["vorname"];
    $tab[$ax]["nachname"] = $dsatz["nachname"];
    $tab[$ax]["stundenlohn"] = $dsatz["stundenlohn"];
}
mysqli_close($con);


/**Alle Datensätze werden mit allen Inhalten angezeigt */
echo "<table border='1'>";
echo "<tr>";
echo "<td>BIC</td>" . "<td>Vorname</td>" . "<td>Nachname</td>" . "<td>Stundenlohn</td>";
echo "</tr>";
foreach($tab as $dsname=>$dswert)
{
    echo "<tr>";
    /**Der schlüssel wird ausgegeben*/
    echo "<td>$dsname:</td>";

    /**Die Infos aus dem Datensatz werden ausgegeben */
    foreach($dswert as $name=>$wert)
    {
        echo "<td>$wert:</td>";
    }
    echo "</tr>";
}

echo "</table>";

/**Einzelne Beispielinforamtionen werden angezeigt */

echo "<p>";
echo $tab["ASFDXX44"]["vorname"] . "<br>";
echo $tab["ASFDXX44"]["nachname"] . "<br>";
echo $tab["ASFDXX44"]["stundenlohn"] . "</p>";





?>