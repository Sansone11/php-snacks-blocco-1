<!-- snack 1 -->
<?php
$numbers = [];
while (count($numbers) < 15) {
    $number = rand(1, 99);
    if (!in_array($number, $numbers))
        $numbers[] = $number;
}
var_dump($numbers);
?>