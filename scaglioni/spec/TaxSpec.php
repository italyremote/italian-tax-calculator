<?php

namespace spec\Tax;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaxSpec extends ObjectBehavior
{
    // fino a 15000 euro	23% (3450)
    // oltre 15000 euro e fino a 28000 euro	27% (3510)
    // oltre 28000 euro e fino a 55000 euro	38% (10260)
    // oltre 55000 euro e fino a 75000 euro	41% (8200)
    // oltre 75000 euro 43%

    function it_is_initializable()
    {
        $this->shouldHaveType('Tax\Tax');
    }
    function it_should_handle_first_bracket()
    {
        $this->getTax(15000.0)->shouldReturn(3450.0);
    }

    function it_should_handle_second_bracket()
    {
        $this->getTax(28000.0)->shouldReturn(6960.0);
    }

    function it_should_handle_third_bracket()
    {
        $this->getTax(55000.0)->shouldReturn(17220.0);
    }

    function it_should_handle_fourth_bracket()
    {
        $this->getTax(75000.0)->shouldReturn(25420.0);
    }

    function it_should_handle_fifth_bracket()
    {
        $this->getTax(85000.0)->shouldReturn(29720.0);
    }
}