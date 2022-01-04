<?php 

/**Sortieren eines zweidimensionalen Felds */

function vergleich($a, $b) 
{
    if($a["Gehalt"] < $b["Gehalt"]) 
    {
        return -1;
    } else if ($a["Gehalt"] > $b["Gehalt"]) 
    {
        return 1;
    } else {
        return 0;
    }
}

$pers = array(
    array("Name"=>"Maier", "Vorname"=>"Hans", "Pnr"=>6714, "Gehalt"=>3500),
    array("Name"=>"Schmitz", "Vorname"=>"Peter", "Pnr"=>8325, "Gehalt"=>3700),
    array("Name"=>"Mertens", "Vorname"=>"Julia", "Pnr"=>2297, "Gehalt"=>3621.50)
);
usort($pers, "vergleich");

foreach($pers as $element) 
{
    foreach($element as $name=>$wert)
    {
        echo "$name: $wert";
    }
    echo "<br>";
}
echo "<br>";







/**Sortieren eines Feldes von Objekten */
class Fahrzeug 
{
    private $geschw;
    private $bezeichnung;


    function __construct($bez, $geschw)
    {
        $this->bezeichnung = $bez;
        $this->geschw = $geschw;
    }

    static function fahrzeugVergleich($a, $b)
    {
        if($a->geschw < $b->geschw) 
        {
            return -1;
        }
        else if ($a->geschw > $b->geschw)
        {
            return 1;
        } else {
            return 0;
        }
    }

    function __toString()
    {
        return "$this->bezeichnung, $this->geschw km/h<br>";
    }
}

$feld = array(
    new Fahrzeug("Opel Astra", 155),
    new Fahrzeug("Scania TS 360", 62),
    new Fahrzeug("Vespa Piaggio", 25),
    new Fahrzeug("VW Golf", 145)
);

usort($feld, array("Fahrzeug", "fahrzeugVergleich"));

foreach($feld as $element)
{
    echo $element;
}


?>