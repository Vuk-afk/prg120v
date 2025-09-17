<?php
$tall1 = $_POST["tall1"] ?? 0;
$tall2 = $_POST["tall2"] ?? 0;

$sum = $tall1 + $tall2;
$diff = $tall1 - $tall2;

echo "Tall 1 er $tall1 <br>";
echo "Tall 2 er $tall2 <br>";
echo "Summen er $sum <br>";
echo "Differansen er $diff <br>";
?>
