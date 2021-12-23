<?php 

function vtauschen($f) 
{
        $temp = $f[0];
        $f[0] = $f[1];
        $f[1] = $temp;

        // echo $temp;
}


function rtauschen(&$f) 
{
        $temp = $f[0];
        $f[0] = $f[1];
        $f[1] = $temp;

        // echo $temp;
}

$f[0] = 12; $f[1]  = 18;
echo "<p>Per Kopie, vorher: $f[0], $f[1]<br></p>";
vtauschen($f);
echo "<p>Per Kopie, nachher: $f[0], $f[1]<br></p>";

$f[0] = 12; $f[1]  = 18;
echo "<p>Per Referenz, vorher: $f[0], $f[1]<br></p>";
rtauschen($f);
echo "<p>Per Referenz, nachher: $f[0], $f[1]<br></p>";

?>