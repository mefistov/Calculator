<?php
$a = $_GET['a'];
$b = $_GET['b'];
$op = $_GET['op'];
$rez = 0;
switch ($op) {
	case '+':
	$rez = $a + $b;
	break;
	case '-':
	$rez = $a - $b;
	break;
	case '*':
	$rez = $a * $b;
	break;
	case '/':
	$rez = $a / $b;
	break;
}
echo "".$rez;
?>