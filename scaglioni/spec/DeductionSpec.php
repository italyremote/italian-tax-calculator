<?php

namespace spec\Tax;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DeductionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Tax\Deduction');
    }

    function it_should_calculate_standard_deduction()
    {
        $this->getStandardDeduction(4800)->shouldReturn(1104.0);
    }

    function it_should_calculate_a_lower_standard_deduction()
    {
        $this->getStandardDeduction(15000)->shouldReturn(879.68);
    }

}
