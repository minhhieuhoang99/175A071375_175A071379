<?php

$to = "dungkt@wru.vn";
$subject = "Send Email from Localhost";
$txt = "Hello Teacher!";
$headers = "From: hanoi.aptech2018@gmail.com" . "\r\n" .
"CC: hanoi.aptech2018@gmail.com";
mail($to,$subject,$txt,$headers);

?>
