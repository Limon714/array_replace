<?php

$food = array("orange", "banana", "apple", 2 => 'grapes', 33, "boss");
$food2 = array("ami", "React", 5 => "Developer");

$new = array_replace($food, $food2);

echo '<pre>';
print_r($new);
echo '</pre>';

?>
