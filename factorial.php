<?php
function factorial($num) {
    if ($num < 0) {
        return "Invalid number";
    }   
    if ($num == 0 || $num == 1) {
        return 1;
    }
    $fact = 1;
    for ($i = 2; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}
$num = 5;
echo "Factorial of $num is:  " . factorial($num);
?>
