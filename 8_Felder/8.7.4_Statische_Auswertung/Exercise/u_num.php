<?php 

if(!file_exists("u_num.txt")) 
{
    exit("Datei kann nicht gefunden werden");
}

$fp = @fopen("u_num.txt", "r");

if(!$fp)
{
    exit("Datei steht nicht zum lesen bereit");
}

/* Alle Werte in ein Feld lesen */
$tp = array();

while(!feof($fp))
{
    $zeile = fgets($fp, 100);
    if(!(feof($fp) && $zeile == ""))
    {
        array_push($tp, doubleval($zeile));
    }
}
fclose($fp);

/** Anzahl der Werte oberhalb der Grenze ermitteln */
$c = 0;
$e = 0;
$grenze1 = doubleval($_POST["age-over"]);
$grenze2 = doubleval($_POST["age-under"]);

foreach($tp as $element)
{
    if($element < $grenze1) 
    {
        $c++;
    }

    if($element > $grenze2) 
    {
        $e++;
    }
}



/*Ausgabe */
if(count($tp) > 0)
{
    $anteil = $c / count($tp) * 100;
    $unteranteil = $e / count($tp) * 100;
    $ausgabe1 = number_format($anteil, 2, ",", ".");
    $ausgabe2 = number_format($unteranteil, 2, ",", ".");

    echo "Oberhalb von $grenze1 Jahren $ausgabe1%" . "<br>";
    echo "Unterhalb von $grenze2 Jahren $ausgabe2%";
} else {
    echo "Die Datei beinhaltet keine Werte";
}


?>