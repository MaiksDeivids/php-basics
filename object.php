<?php
$auto = [
    "marka" => "Toyota",
    "modelis" => "Corolla",
    "gads" => 2012
];

echo "Automāšīnas marka: " . $auto["marka"] . "\n";
$tekosasGads = date("Y");
$vecums = $tekosasGads - $auto["gads"];

if ($vecums > 10) {
    echo "Auto ir vecāks par 10 gadiem.\n";
} else {
    echo "Auto nav vecāks par 10 gadiem.\n";
}
?>