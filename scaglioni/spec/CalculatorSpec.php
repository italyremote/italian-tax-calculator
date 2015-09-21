<?php

namespace spec\Tax;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Tax\Pension;
use Tax\Tax;

class CalculatorSpec extends ObjectBehavior
{
    function let(Tax $tax, Pension $pension)
    {
        $this->beConstructedWith($tax, $pension);
    }

    function it_should_calculate_tax_on_income()
    {
        $this->getIncomeTax(45000)->shouldReturn(13420);
    }

}
