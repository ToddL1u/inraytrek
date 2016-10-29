<?php

$db = new mysqli("localhost", "root", "tuetcst", "inraytrek");
//$db = new mysqli("localhost", "inray", "JDVQ3EEd6eTWDY69", "inray");
if (mysqli_connect_errno($db)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
