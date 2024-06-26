<?php

class SumCalculator {
    private $number1;
    private $number2;

    public function __construct($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function getSum() {
        return $this->number1 + $this->number2;
    }
}
