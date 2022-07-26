<?php
$file = "text.csv";
$openfile = fopen($file, "r");
$cont = fread($openfile, filesize($file));
echo $cont;
?>  