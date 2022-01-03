<?php 

/* Verbindung aufnehmen und DB ausweahlen */
$con = mysqli_connect("", "root", "", "hardware");

/**SQL-Abfrage */
$res = mysqli_query($con, "SELECT * FROM fp");

/**Output datasets */
$num = mysqli_num_rows($res);
if($num > 0) {
    echo "Ergebnis<br>";
} else {
    echo "Keine Ergebnisse<br>";
}

echo "<table border='1'>";
echo "<tr><td>Hersteller</td><td>Typ</td><td>GB</td><td>Preis</td><td>Artnummer</td></tr>";
while($dset = mysqli_fetch_assoc($res)) 
{
    echo "<tr>";
        echo
        "<td>" . $dset["hersteller"] . "</td>" . 
        "<td>" . $dset["typ"] . "</td>" . 
        "<td>" . $dset["gb"] . "</td>" . 
        "<td>" . $dset["preis"] . "</td>" . 
        "<td>" . $dset["artnummer"];
    echo "</tr>";
}

echo "</table>";




/**Verbindung schließen */
mysqli_close($con);



?>