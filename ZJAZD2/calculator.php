<?php
$a = $_GET["a"];
$b = $_GET["b"];
$action = $_GET["action"];
$result = 0;
switch ($action) {
    case "addition":
        $result = $a + $b;
        break;
    case "subtraction":
        $result = $a - $b;
        break;
    case "multiplication":
        $result = $a * $b;
        break;
    case "division":
        $result = $a / $b;
        break;
    case "modulo":
        $result = $a % $b;
        break;
}
echo "Wynik: " . $result;
?>
