<?php
/**
 * echo
 */
echo '4';
echo PHP_EOL;
echo 4;
echo "\n";
echo (4);
echo PHP_EOL; 
echo 4, 5, 6,' Hello ';

/**
 * Variable output
 */
echo "\n##### variable output #######\n";
$foo = 12;
$bar = 5;
$str = 'Shako';
echo $foo + $bar;
echo "\n";
echo $foo - $bar;
echo "\n";
echo $foo * $bar;
echo "\n";
echo $foo / $bar;
echo "\n";
echo $foo % $bar;
echo "\n";
$s1 = 'Hi ';
$s2 = 'Test';
$s3 = ' Shako';

echo $s1 . $s2 . $s3;
echo PHP_EOL;
echo '12 + 5 = ' . ($foo + $bar);

echo "\n##### floated points #######\n";
$d1 = 8.5;
echo $d1 + 11;

echo "\n--------- Strings ----------\n";
$d1 = 'String';
echo $d1;
echo "\n";
$f = "$d1 shako";
echo $f;

echo "\n--------- Scopes ----------\n";
$a = 3;
$b = 4;
$c = ($a** 2 + $b** 2)**0.51;
echo $c;

echo "\n--------- usefulness ----------\n";
var_dump($a);
var_dump($f);
var_dump($d1);
$d2 = 13.05;
var_dump($d2);
echo 'Hello new branch';
echo 'Hello next branch';