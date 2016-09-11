<?php

use EnriqueSegura\Fizzbuzz;

class FizzbuzzTest extends PHPUnit_Framework_TestCase
{
    public function testMock()
     {
         $this->assertInstanceOf('\EnriqueSegura\FizzBuzz', new Fizzbuzz);
     }
}
