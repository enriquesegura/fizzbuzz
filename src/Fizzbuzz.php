<?php

namespace EnriqueSegura;

class Fizzbuzz
{
    private $fizz = 'Fizz';
    private $buzz = 'Buzz';
    private $fizzBuzz = 'FizzBuzz';


    public function output($number)
    {
        $result = "";

        for($i=1;$i<=$number;$i++){
            if(($this->isNumMultipleOfThree($i)) && ($this->isNumMultipleOfFive($i))){
                $result .= $this->getFizzBuzz();
            }elseif ($this->isNumMultipleOfThree($i)){
                $result .= $this->getFizz();
            }elseif ($this->isNumMultipleOfFive($i)){
                $result .= $this->getBuzz();
            }else{
                $result .= $i;
            }
            $result .= "\n";
        }
        return $result;
    }

    public function setFizz($string)
    {
        $this->fizz = $string;
    }

    public function setBuzz($string)
    {
        $this->buzz = $string;
    }

    public function setFizzBuzz($string)
    {
        $this->fizzBuzz = $string;
    }

    private function getFizzBuzz()
    {
        return $this->fizzBuzz;
    }

    private function getFizz()
    {
        return $this->fizz;
    }

    private function getBuzz()
    {
        return $this->buzz;
    }

    private function isNumMultipleOfThree($number)
    {
        return $number % 3 == 0;
    }

    private function isNumMultipleOfFive($number)
    {
        return $number % 5 == 0;
    }
}