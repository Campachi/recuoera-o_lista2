<?php
$num = 0; 

while ($num <= 200) {
    if ($num < 2) {
        echo "$num não é primo\n";
    } else {
        $divisor = 2;

        $isPrime = true;
        while ($divisor * $divisor <= $num) {
            if ($num % $divisor == 0) {
                $isPrime = false;
                break;
            }
            $divisor++;
        }
        echo $isPrime ? "$num é primo\n" : "$num não é primo\n";
    }
    $num++; 
}
?>
