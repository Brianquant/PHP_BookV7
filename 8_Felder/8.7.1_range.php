<?php 

$tp = range(3, 20, 4);

foreach($tp as $element)
{
    echo "$element, ";
}
echo "<br>";

foreach(range(3, 20, 4) as $element)
{
    echo "$element, ";
}
echo "<br>";

foreach(range(20, 3, 4) as $element)
{
    echo "$element, ";
}
echo "<br>";

foreach(range(20, 3) as $element)
{
    echo "$element, ";
}
echo "<br>";





?>