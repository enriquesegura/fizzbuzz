<?php

use EnriqueSegura\Fizzbuzz;

class FizzbuzzTest extends PHPUnit_Framework_TestCase
{
    public function testOutputNumberWhenNotMultipleOfThreeOrFive()
    {
        $fizzbuzz =  new Fizzbuzz();
        $this->assertEquals("1\n2\n",$fizzbuzz->output(2));
    }

    public function testOutputNumberWhenMultipleOfThreeAndFive()
    {
        $fizzbuzz = new Fizzbuzz();

        $fizzbuzz->setFizz("three");
        $fizzbuzz->setBuzz("five");
        $fizzbuzz->setFizzBuzz("both");

        $this->assertEquals("1\n2\nthree\n4\nfive\nthree\n7\n8\nthree\nfive\n11\nthree\n13\n14\nboth\n16\n", $fizzbuzz->output(16));
    }
}
