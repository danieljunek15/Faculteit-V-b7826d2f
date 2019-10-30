<?php
echo "van welk getal wil je de faculteit weten?". PHP_EOL;
$getal = readline();
$aws = 1;
while ($i < $getal):
    $i++;
    $aws = $aws * $i;
endwhile;
echo ($aws). PHP_EOL;           