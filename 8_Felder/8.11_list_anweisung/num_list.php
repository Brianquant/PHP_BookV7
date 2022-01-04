<?php 

/**Elemente aus numerischen Arrays, Kommata setzen */
$farben = array("Rot", "Gelb", "Blau", "Magenta", "Cyan");
list($erstes, $zweites, $viertes) = $farben;
echo "$erstes, $zweites, $viertes <br>";

$tp = array("Sonntag"=>22.8, "Montag"=>17.5, "Dienstag"=>19.2);
list("Sonntag"=>$erstes, "Montag"=>$drittes) = $tp;
echo "$erstes, $drittes<br>";

/**Datenbankzugriff, mit mysqli_fetch_row() */
$con = mysqli_connect("", "root", "", "firma");
$res = mysqli_query($con, "SELECT * from mitarbieter");

while(list($nachname, $vorname, $gehalt) = mysqli_fetch_row($res)) {
    echo "$nachname, $vorname $gehalt <br>";
} 
mysqli_close($con);

?>