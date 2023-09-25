<?php

namespace Drupal\tribus_module\Service;

/**
 * Class Adder
 *
 * Provides a simple service to perform addition of two numbers.
 */
class Adder {
    
    /**
     * Adds two numbers together.
     *
     * @param float|int $num1 The first number to add.
     * @param float|int $num2 The second number to add.
     * @return float|int The sum of the two numbers.
     */
    public function add($num1, $num2) {
        return $num1 + $num2;
    }
}
