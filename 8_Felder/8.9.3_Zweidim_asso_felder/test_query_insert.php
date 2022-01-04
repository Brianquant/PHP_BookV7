<?php 


/* Die Informationen werden aus der Datenbank geholt */
$con = mysqli_connect("", "root", "", "hardware");
mysqli_query($con, "INSERT INTO fp (PLV) VALUES (123)");
mysqli_close($con);









?>