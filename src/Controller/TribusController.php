<?php

namespace Drupal\tribus_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\tribus_module\Service\StringFormatter;

/**
 * Class TribusController.
 *
 * Provides a controller for formatting and displaying the sum of two numbers.
 */
class TribusController extends ControllerBase {

    /**
     * The String Formatter service.
     *
     * @var \Drupal\tribus_module\Service\StringFormatter
     */
    protected $stringFormatter;

    /**
     * TribusController constructor.
     *
     * @param \Drupal\tribus_module\Service\StringFormatter $stringFormatter
     *   The String Formatter service.
     */
    public function __construct(StringFormatter $stringFormatter) {
        $this->stringFormatter = $stringFormatter;
    }

    /**
     * Get the String Formatter service from the container and return an instance of the class. 
     */
    public static function create(ContainerInterface $container) {
        $stringFormatter = $container->get('tribus_module.string_formatter');
        return new static($stringFormatter);
    }

    /**
     * Display the sum of two numbers.
     *
     * @param float|int $num1
     *   The first number.
     * @param float|int $num2
     *   The second number.
     *
     * @return array
     *   An array containing the markup with the formatted sum.
     */
    public function display($num1, $num2) {
        // Format the sum of the two numbers using the String Formatter service.
        $output = $this->stringFormatter->format($num1, $num2);
        // Return an array with the formatted sum as markup.
        return [
            '#type' => 'markup',
            '#markup' => $output,
        ];
    }
}
