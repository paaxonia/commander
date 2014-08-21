<?php namespace spec\Paaxonia\Commander;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CommandTraitSpec extends ObjectBehavior {

    function let()
    {
        $this->beAnInstanceOf('spec\Paaxonia\Commander\Foo');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('spec\Paaxonia\Commander\Foo');
    }
}

class Foo {
    
}