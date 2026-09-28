<?php

$array = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Print all elements
echo "All elements: ";
foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";

// Total of all elements
$total = array_sum($array);
echo "Total = " . $total . "<br>";

// Total of even elements
$evenTotal = 0;
foreach ($array as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    }
}
echo "Total of even elements = " . $evenTotal . "<br>";

// Total of odd elements
$oddTotal = 0;
foreach ($array as $value) {
    if ($value % 2 != 0) {
        $oddTotal += $value;
    }
}
echo "Total of odd elements = " . $oddTotal . "<br>";

// Minimum element and positions
$min = min($array);
echo "Minimum = " . $min . "<br>";
echo "Minimum positions: ";

foreach ($array as $key => $value) {
    if ($value == $min) {
        echo $key . " ";
    }
}

echo "<br>";

// Maximum element and positions
$max = max($array);
echo "Maximum = " . $max . "<br>";
echo "Maximum positions: ";

foreach ($array as $key => $value) {
    if ($value == $max) {
        echo $key . " ";
    }
}

?>
