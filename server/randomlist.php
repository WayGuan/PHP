<?php
/**
 * Returns a json-encoded list of random numbers.
 */

// get the parameters
$min = filter_input(INPUT_GET, "min", FILTER_VALIDATE_INT);
$max = filter_input(INPUT_GET, "max", FILTER_VALIDATE_INT);
$num = filter_input(INPUT_GET, "num", FILTER_VALIDATE_INT);

// build the array
$result = [];
for ($i=0; $i<$num; $i++) {
    array_push($result, rand($min,$max));
}

// echo into the response
echo json_encode($result);
?>
