<?php

namespace spec\Happyr\DoctrineSpecification\Filter;

use Happyr\DoctrineSpecification\Filter\In;
use PhpSpec\ObjectBehavior;

/**
 * @mixin In
 */
class InSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('field', 'value');
    }

    function it_is_a_filter()
    {
        $this->shouldBeAnInstanceOf('Happyr\DoctrineSpecification\Filter\FilterInterface');
    }

    function it_is_a_comparision()
    {
        $this->shouldBeAnInstanceOf('Happyr\DoctrineSpecification\Filter\ComparisonInterface');
    }

    function it_has_field_name()
    {
        $this->getField()->shouldReturn('field');
    }

    function it_has_field_value()
    {
        $this->getValue()->shouldReturn('value');
    }
}
