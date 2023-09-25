<?php

namespace Drupal\tribus_module\Service;

use Drupal\tribus_module\Service\Adder;

/**
 * Class StringFormatter
 *
 * This class is formats strings with the addition of two numbers.
 */
class StringFormatter {

    /**
     * The Adder service used for performing the addition.
     *
     * @var Adder
     */
    protected $adder;

    /**
     * StringFormatter constructor.
     *
     * @param Adder $adder
     *   The Adder service.
     */
    public function __construct(Adder $adder) {
        // Initialize the Adder service.
        $this->adder = $adder;
    }

    /**
     * Formats a string to display the sum of two numbers.
     *
     * @param float|int $num1
     *   The first number.
     * @param float|int $num2
     *   The second number.
     * @return string
     *   A string representing the sum of the two numbers.
     */
    public function format($num1, $num2) {
        $sum = $this->adder->add($num1, $num2);
        return "The sum of $num1 and $num2 is $sum";
    }
}
