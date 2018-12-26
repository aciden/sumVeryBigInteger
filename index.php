<?php

function sumVeryBigInteger(string $number1, string $number2) {

    $sumPart = 10;
    $remainder = 0;
    $sumNumber = '';
    do {
        $partNumber1 = mb_substr($number1, -$sumPart);
        $partNumber2 = mb_substr($number2, -$sumPart);
        $number1 = mb_substr($number1, 0, -$sumPart);
        $number2 = mb_substr($number2, 0, -$sumPart);
        if (($sum = (int) $partNumber1 + (int) $partNumber2 + $remainder)) {
            $remainder = (int) mb_substr($sum, 0, -$sumPart);
            $sum = (string) mb_substr($sum, -$sumPart);
            $sumNumber = (string) $sum . $sumNumber;
        }

    } while ($number1 || $number2);

    return $sumNumber;
}
