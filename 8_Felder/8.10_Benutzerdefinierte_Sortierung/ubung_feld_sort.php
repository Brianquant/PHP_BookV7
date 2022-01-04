<?php 


$starttermine = array(
    array("Januar-1"=>"02.01.2022", "Januar-2"=>"12.01.2022", "Januar-3"=>"26.01.2022"),
    array("Februar-1"=>"05.02.2022", "Februar-2"=>"15.02.2022", "Februar-3"=>"23.02.2022"),
    array("Mearz-1"=>"04.03.2022", "Mearz-2"=>"17.03.2022", "Mearz-3"=>"21.03.2022")
);

echo "<table border='1'>";

foreach($starttermine as $element)
{
    foreach($element as $name => $wert) 
    {
        echo "<tr><td>$name: $wert</td></tr>";  
    }
}
echo "</table>";



?> 