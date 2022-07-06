<?php

$n1 = 10;
$n2 = "10";

# Strict comparision of value and type.
$ans = $n1 === $n2;  // identical operator.
var_dump($ans);

echo "<br/>";

$ans = $n1 !== $n2;
var_dump($ans);  // non-identical operator.

?>