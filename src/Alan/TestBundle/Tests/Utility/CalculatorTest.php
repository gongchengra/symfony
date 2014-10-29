<?php

namespace Alan\TestBundle\Tests\Utility;
use Alan\TestBundle\Utility\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        $this->assertEquals(42, $result);
    }
}
