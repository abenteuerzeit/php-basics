<?php

$LINE_NUMBER = 0;

function printLine($input = "", $tab = 4)
{
  global $LINE_NUMBER;
  echo ++$LINE_NUMBER . str_repeat(" ", $tab) . $input . "\n";
}

$initial = '555';
$a = octdec($initial);
printLine($a);

$b = deg2rad($a);
printLine($b);

$c = cos($b);
printLine($c);

$d = round($c, 3);
printLine($d);

$e = log($d);
printLine($e);

$f = abs($e);
printLine($f);

$g = acos($f);
printLine($g);

$h = rad2deg($g);
printLine($h);

$i = floor($h);
printLine($i);

$j = $i - 47;
printLine($j);